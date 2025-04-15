<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/redirect-by-role', function () {
    $user = Auth::user();
    return match ($user->role) {
        'admin' => redirect('/admin/dashboard'),
        'umkm' => redirect('/umkm/dashboard'),
        default => redirect('/user/dashboard'),
    };
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/umkm', [UmkmController::class, 'index']);
Route::get('/umkm/{id}', [UmkmController::class, 'show']);

Route::get('/chat', [ChatController::class, 'index']);
Route::get('/chat/{id}', [ChatController::class, 'show']);
