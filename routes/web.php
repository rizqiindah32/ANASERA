<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Api\UserAuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\KonsultasiMessageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservasiController;


/* ---------- HALAMAN USER ---------- */
Route::view('/',             'user.home');
Route::view('/profile',      'user.profile');
Route::view('/galery',       'user.galery');
Route::view('/konsultasi',   'user.konsultasi');

/* Form reservasi – perlu login */
Route::get('/form_reservasi', function () {
    return view('user.form_reservasi');
})->middleware('auth');

/* Simpan reservasi */
Route::post('/user/reservasi', [ReservasiController::class, 'store'])
      ->middleware('auth');
Route::get('/reservasi/create/{tanggal}', [ReservasiController::class, 'create'])->name('reservasi.create');

/* ---------- LOGIN USER ---------- */
Route::get('/layanan', [LayananController::class, 'index'])->middleware('auth');
Route::get('/konsultasi', [ChatController::class, 'index'])->middleware('auth');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

// Tampilkan halaman register
Route::get('/register', function () {
    return view('user.register');
});

// Tangani request POST register
Route::post('/register', [UserAuthController::class, 'register']);

/* ---------- HALAMAN ADMIN ---------- */
Route::prefix('admin')->group(function () {
    Route::view('/login',      'admin.login');
    Route::post('/login',      [AdminAuthController::class, 'login']);

    // sementara tanpa middleware
    Route::view('/dashboard',  'admin.dashboard')->name('admin.dashboard');
    Route::view('/akun',       'admin.akun')      ->name('admin.akun');
    Route::view('/layanan',    'admin.layanan')   ->name('admin.layanan');
    Route::view('/galery',     'admin.galery')    ->name('admin.galery');
    Route::get('/form_reservasi', [ReservasiController::class, 'index'])->name('admin.reservasi');

});

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');

Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::middleware(['auth.multi'])->group(function () {
    Route::get('/konsultasi', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/chat/messages/{userId}', [ChatController::class, 'fetchMessages']);
    Route::post('/chat/send', [ChatController::class, 'sendMessage']);
});

