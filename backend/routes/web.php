<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('/chat/{receiver_id}', [ChatController::class, 'showChat'])->name('chat');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/send-message', [ChatController::class, 'sendMessage']);
    Route::get('/messages/{user}', [ChatController::class, 'getMessages']);
});
