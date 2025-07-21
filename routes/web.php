<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SetUpScheduleController;
use App\Http\Controllers\ProfileController;

// ==========================
// HALAMAN PUBLIK (Tidak Perlu Login)
// ==========================

// Home
Route::get('/', [CustomerController::class, 'index'])->name('home');

// Login
Route::get('/login-user', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-user', [LoginController::class, 'login'])->name('login-user');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');

// Set Up Schedule
Route::get('/set-up-schedule', function () {
    return view('customers.setUpSchedule');
})->name('setUpSchedule');

Route::get('/setUpSchedule', [CustomerController::class, 'create'])->name('setUpSchedule.form');
Route::post('/setUpSchedule', [CustomerController::class, 'store'])->name('customer.store');

// Profil Terapis
Route::get('/profil-terapis', [ProfileController::class, 'showSertifikat'])->name('profile');

// Kontak
Route::get('/kontak', [ProfileController::class, 'kontak'])->name('kontak');


// ==========================
// HALAMAN ADMIN (Harus Login)
// ==========================
Route::middleware(['auth'])->group(function () {

    // Dashboard Admin
    Route::get('/admin', [CustomerController::class, 'admin'])->name('admin');

    // Fitur pencarian admin
    Route::get('/admin/search', [CustomerController::class, 'search'])->name('admin.search');

    // Manipulasi data customer
    Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
});
