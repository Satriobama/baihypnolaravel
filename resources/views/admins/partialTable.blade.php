@forelse($customers as $customer)
    <tr>
        <td>{{ ($customers->currentPage() - 1) * $customers->perPage() + $loop->iteration }}</td>
        <td>{{ $customer->fullname }}</td>
        <td>{{ $customer->nickname }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->phone }}</td>
        <td>{{ $customer->address }}</td>
        <td class="text-center">{{ $customer->day_consultation }}</td>
        <td class="text-center">
            <a href="#" class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editModal"
                data-id="{{ $customer->id }}" data-fullname="{{ $customer->fullname }}"
                data-nickname="{{ $customer->nickname }}" data-birthday="{{ $customer->birthday }}"
                data-email="{{ $customer->email }}" data-phone="{{ $customer->phone }}"
                data-address="{{ $customer->address }}"
                data-day_consultation="{{ \Carbon\Carbon::parse($customer->day_consultation)->format('Y-m-d') }}">
                Edit
            </a>
            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="8" class="text-center">Belum ada data customer.</td>
    </tr>
@endforelse
