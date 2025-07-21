<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SetUpScheduleController;
use Pest\Plugins\Profile;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('home');

// Login Logout route
Route::get('/login-user', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-user', [LoginController::class, 'login'])->name('login-user');

Route::get('/admin', [CustomerController::class, 'admin'])
    ->middleware('auth')
    ->name('admin');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');


// set up schedule route
Route::get('/set-up-schedule', function () {
    return view('customers.setUpSchedule');
})->name('setUpSchedule');

Route::get('/setUpSchedule', [CustomerController::class, 'create'])->name('setUpSchedule');
Route::post('/setUpSchedule', [CustomerController::class, 'store'])->name('customer.store');

Route::get('/', [App\Http\Controllers\CustomerController::class, 'index']);


// Profile route
Route::get('/profil-terapis', function () {
    return view('profilTerapis');
})->name('profile');

Route::get('/profil-terapis', [\App\Http\Controllers\ProfileController::class, 'showSertifikat'])->name('profile');


// Contact route
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/kontak', [\App\Http\Controllers\ProfileController::class, 'kontak'])->name('kontak');


// manipulation routes
Route::get('/admin/search', [App\Http\Controllers\CustomerController::class, 'search'])->name('admin.search');

Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
