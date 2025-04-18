<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    // Tampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Tampilkan halaman register
    public function showRegister()
    {
        return view('auth.register');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek apakah remember me dicentang
        $remember = $request->has('remember');

        // Auth dengan opsi remember
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user instanceof User) {
                // Jika objek user adalah instansi dari User, kita bisa simpan
                $user->last_login = now();
                $user->save();
            }


            if ($user->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif ($user->role === 'umkm') {
                return redirect()->intended('/umkm/dashboard');
            } elseif ($user->role === 'konsultan') {
                return redirect()->intended('konsultan/dashboard');
            } else {
                return redirect()->intended('/users/dashboard');
            }
        }


        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:100',
            'umur' => 'required|integer|min:10|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'email' => 'required|email|unique:users,email',
            'no_telepon' => 'required|string|max:20',
            'provinsi' => 'required|string|max:100',
            'kota' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kelurahan' => 'required|string|max:100',
            'kode_pos' => 'required|string|max:10',
            'alamat' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:admin,umkm,pencari_kerja,konsultan',
            'lulusan_sekolah_terakhir' => 'required|string|max:100',
            'jurusan' => 'nullable|string|max:100',
            'posisi_pekerjaan' => 'nullable|string|max:100',
            'bio' => 'nullable|string',
            'keahlian' => 'nullable|string',
        ]);

        $user = User::create([
            'fullname' => $validated['fullname'],
            'umur' => $validated['umur'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'email' => $validated['email'],
            'no_telepon' => $validated['no_telepon'],
            'provinsi' => $validated['provinsi'],
            'kota' => $validated['kota'],
            'kecamatan' => $validated['kecamatan'],
            'kelurahan' => $validated['kelurahan'],
            'kode_pos' => $validated['kode_pos'],
            'alamat' => $validated['alamat'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            'status_akun' => 'nonaktif',
            'lulusan_sekolah_terakhir' => $validated['lulusan_sekolah_terakhir'],
            'jurusan' => $validated['jurusan'] ?? null,
            'posisi_pekerjaan' => $validated['posisi_pekerjaan'] ?? null,
            'bio' => $validated['bio'] ?? null,
            'keahlian' => $validated['keahlian'] ?? null,
        ]);

        Auth::login($user);
        return redirect('/redirect-by-role');
    }


    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function showVerificationNotice()
    {
        return view('auth.verify');
    }

    public function sendVerificationLink(Request $request)
    {
        $user = Auth::user();

        if ($user && !$user->hasVerifiedEmail()) {
            // Mengirimkan ulang link verifikasi
            $user->sendEmailVerificationNotification();

            return back()->with('status', 'Link verifikasi telah dikirim ulang ke email Anda.');
        }

        return back()->withErrors(['email' => 'Akun Anda sudah terverphifikasi.']);
    }


    // Tampilkan form lupa password
    public function showForgotPasswordForm(Request $request)
    {
        return view('auth.forgot_password'); // pastikan file ini ada
    }

    // Kirim email reset password
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    // Tampilkan form reset password
    public function showResetForm(Request $request, $token)
    {
        return view('auth.reset-password', [
            'token' => $token,
            'email' => $request->email,
        ]);
    }


    // Simpan password baru
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
