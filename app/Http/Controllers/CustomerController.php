<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function admin(Request $request)
    {
        $query = Customer::query();

        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function ($sub) use ($q) {
                $sub->where('fullname', 'like', "%$q%")
                    ->orWhere('nickname', 'like', "%$q%")
                    ->orWhere('email', 'like', "%$q%")
                    ->orWhere('phone', 'like', "%$q%")
                    ->orWhere('address', 'like', "%$q%");
            });
        }

        $customers = $query->paginate(5);
        $scheduledDates = Customer::pluck('day_consultation')->toArray();

        // Tanggal penting untuk Flatpickr
        $today = date('Y-m-d');
        $mindate = date('Y-m-d', strtotime('-600 months'));
        $maxDate = date('Y-m-d', strtotime('+2 months'));
        $maxDate2 = date('Y-m-d', strtotime('-192 months'));

        return view('admins.admin', [
            'customers' => $customers,
            'scheduledDates' => $scheduledDates,
            'today' => $today,
            'mindate' => $mindate,
            'maxDate' => $maxDate,
            'maxDate2' => $maxDate2,
        ]);
    }


    public function search(Request $request)
    {
        $query = \App\Models\Customer::query();

        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function ($sub) use ($q) {
                $sub->where('fullname', 'like', "%$q%")
                    ->orWhere('nickname', 'like', "%$q%")
                    ->orWhere('email', 'like', "%$q%")
                    ->orWhere('phone', 'like', "%$q%");
            });
        }

        $customers = $query->paginate(5);
        return view('admins.partialTable', compact('customers'))->render();
    }

    public function create()
    {
        $scheduledDates = \App\Models\Customer::pluck('day_consultation')->toArray();

        $today = date('Y-m-d');
        $mindate = date('Y-m-d', strtotime('-600 months')); // For birthday min
        $maxDate = date('Y-m-d', strtotime('+2 months'));   // For consultation max
        $maxDate2 = date('Y-m-d', strtotime('-192 months')); // For birthday max

        return view('customers.setUpSchedule', [
            'scheduledDates' => $scheduledDates,
            'today' => $today,
            'mindate' => $mindate,
            'maxDate' => $maxDate,
            'maxDate2' => $maxDate2,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required',
            'nickname' => 'nullable',
            'birthday' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'day_consultation' => 'required|date',
        ]);

        // Save to DB
        try {
            \App\Models\Customer::create([
                'fullname' => $validated['fullname'],
                'nickname' => $validated['nickname'],
                'birthday' => $validated['birthday'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'address' => $validated['address'],
                'day_consultation' => $validated['day_consultation'],
            ]);
            return back()->with('success', 'Jadwal berhasil dibuat!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal membuat jadwal! Silahkan coba lagi.');
        }

        // WhatsApp notification (open WhatsApp chat with prefilled message)
        $waNumber = '6287878571492'; // Your WhatsApp number, use country code
        $waMessage = urlencode("New Customer wants to Consultation:\nName: {$validated['fullname']}\nDate: {$validated['consultation_date']}");
        $waUrl = "https://wa.me/{$waNumber}?text={$waMessage}";

        return redirect($waUrl);
    }

    // public function edit($id)
    // {
    //     $customer = \App\Models\Customer::findOrFail($id);
    //     return view('customers.edit', compact('customer'));
    // }

    public function update(Request $request, $id)
    {
        $customer = \App\Models\Customer::findOrFail($id);
        $customer->update($request->all());
        return redirect()->route('admin')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $customer = \App\Models\Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('admin')->with('success', 'Data berhasil dihapus!');
    }

    public function index()
    {
        $bookedDates = \App\Models\Customer::pluck('day_consultation')->toArray();
        return view('home', compact('bookedDates'));
    }
}
