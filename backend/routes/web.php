<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\LowonganKerjaController;
use App\Http\Controllers\KonsultasiPembayaranController;
use App\Http\Controllers\KonsultanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\URL;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/forgot_password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot_password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset_password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset_password', [AuthController::class, 'resetPassword'])->name('password.update');


Route::get('/layanan/sdm', function () {
    return view('layanan.sdm.beranda');
});

Route::get('/temukan-pekerja', [UserController::class, 'sdmI'])->name('temukan.pekerja');

Route::get('/temukan-lowongan', function () {
    return view('layanan.sdm.temukan-lowongan');
})->name('temukan.lowongan');

Route::get('/redirect-by-role', function () {
    $user = Auth::user();
    return match ($user->role) {
        'admin' => redirect('/admin/dashboard'),
        'umkm' => redirect('/umkm/dashboard'),
        'konsultan' => redirect('/konsultan/dashboard'),
        default => redirect('/users/dashboard'),
    };
})->middleware('auth');

// Group routes yang perlu auth
Route::middleware(['auth', 'verified'])->group(function () {

    // User
    Route::get('/users/dashboard', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::get('/users/{id}/edit', [UserController::class, 'edit']);
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');


    // UMKM Routes
    Route::get('/umkm/buat-lowongan', [LowonganKerjaController::class, 'create'])->name('umkm.lowongan.create');
    Route::post('/umkm/buat-lowongan', [LowonganKerjaController::class, 'store'])->name('umkm.lowongan.store');
    Route::get('/umkm/dashboard', [UmkmController::class, 'index'])->name('umkm.index');
    Route::get('/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
    Route::post('/umkm/create', [UmkmController::class, 'store'])->name('umkm.store');
    Route::get('/umkm/{id}/edit', [UmkmController::class, 'edit'])->name('umkm.edit');
    Route::put('/umkm/{id}', [UmkmController::class, 'update'])->name('umkm.update');
    Route::get('/umkm/{id}', [UmkmController::class, 'show'])->name('umkm.show');
    Route::delete('/umkm/{id}', [UmkmController::class, 'destroy'])->name('umkm.destroy');
    Route::resource('lowongan', App\Http\Controllers\LowonganKerjaController::class);

    // Chat
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/chats', [ChatController::class, 'show'])->name('chat.show');
    Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');

    // Konsultan
    Route::resource('konsultan', KonsultanController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::get('/konsultan/dashboard', [KonsultanController::class, 'index'])->name('konsultan.index');
    Route::get('/konsultan', [KonsultanController::class, 'show'])->name('konsultan.show');

    // Konsultasi Pembayaran
    Route::get('/konsultasi', [KonsultasiPembayaranController::class, 'index'])->name('konsultasi.index');
    Route::post('/konsultasi/order', [KonsultasiPembayaranController::class, 'order'])->name('konsultasi.order');
    Route::post('/konsultasi/callback', [KonsultasiPembayaranController::class, 'callback'])->name('konsultasi.callback');

    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

});

Route::get('/email/verify', [AuthController::class, 'showVerificationNotice'])->name('verification.notice');
Route::post('/verification/send', [AuthController::class, 'sendVerificationLink'])->name('verification.send');
Route::get('/email/verify/{id}/{hash}', function ($id, $hash) {
    $user = \App\Models\User::findOrFail($id);
    if (hash_equals($hash, sha1($user->getEmailForVerification()))) {
        $user->markEmailAsVerified();

        $user->status_akun = 'aktif';
        $user->save();

        return match ($user->role) {
            'admin' => redirect('/admin/dashboard'),
            'umkm' => redirect('/umkm/dashboard'),
            'konsultan' => redirect('/konsultan/dashboard'),
            default => redirect('/users/dashboard'),
        };
    }

    return redirect('/login')->withErrors(['email' => 'Link verifikasi tidak valid.']);
})->middleware(['auth', 'signed'])->name('verification.verify');
