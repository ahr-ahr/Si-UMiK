<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Registrasi pengguna
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Confirm password field
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        return redirect('/'); // Redirect ke halaman utama setelah login
    }

    // Login pengguna
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($validated)) {
            // Login berhasil, alihkan ke halaman chat dengan receiver_id sebagai ID pengguna yang login
            return redirect()->route('chat', ['receiver_id' => Auth::user()->id]);
        }

        return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
    }

    // Logout pengguna
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
