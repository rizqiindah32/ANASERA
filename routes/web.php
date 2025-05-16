<?php

use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ROUTE HALAMAN USER
Route::get('/', function () {
    return view('user.home');
});

Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/layanan', function () {
    return view('user.layanan');
});

Route::get('/galery', function () {
    return view('user.galery');
});

Route::get('/form_reservasi', function () {
    return view('user.form_reservasi');
});

Route::get('/konsultasi', function () {
    return view('user.konsultasi');
});

Route::get('/admin/login', function () {
    return view('admin.login'); // ini untuk menangani /admin/login
});

// ROUTE HALAMAN ADMIN (sementara tanpa login)
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    Route::get('/akun', fn() => view('admin.akun'))->name('admin.akun');
    Route::get('/layanan', fn() => view('admin.layanan'))->name('admin.layanan');
    Route::get('/galery', fn() => view('admin.galery'))->name('admin.galeri');
    Route::get('/reservasi', fn() => view('admin.form_reservasi'))->name('admin.reservasi');
    Route::get('/konsultasi', fn() => view('admin.konsultasi'))->name('admin.konsultasi');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::post('/admin/login', [AdminAuthController::class, 'login']);
