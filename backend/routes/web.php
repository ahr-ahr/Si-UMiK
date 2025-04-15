<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\URL;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/redirect-by-role', function () {
    $user = Auth::user();
    return match ($user->role) {
        'admin' => redirect('/admin/dashboard'),
        'umkm' => redirect('/umkm/dashboard'),
        default => redirect('/users/dashboard'),
    };
})->middleware('auth');

// Group routes yang perlu auth
Route::middleware(['auth', 'verified'])->group(function () {

    // User
    Route::get('/users/dashboard', [UserController::class, 'index']);
    Route::get('/users/{id}', [UserController::class, 'show']);

    // UMKM
    Route::get('/umkm/dashboard', [UmkmController::class, 'index']);
    Route::get('/umkm/{id}', [UmkmController::class, 'show']);

    // Chat
    Route::get('/chat/dashboard', [ChatController::class, 'index']);
    Route::get('/chat/{id}', [ChatController::class, 'show']);

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
            default => redirect('/users/dashboard'),
        };
    }

    return redirect('/login')->withErrors(['email' => 'Link verifikasi tidak valid.']);
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/forgot_password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot_password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
