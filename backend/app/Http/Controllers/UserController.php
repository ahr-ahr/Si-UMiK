<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        // Cegah user lain mengedit data orang lain (kecuali admin)
        if (auth()->user()->id !== $user->id && auth()->user()->role !== 'admin') {
            abort(403);
        }

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Cegah user lain mengedit data orang lain (kecuali admin)
        if (auth()->user()->id !== $user->id && auth()->user()->role !== 'admin') {
            abort(403);
        }

        // Validasi input
        $validated = $request->validate([
            'fullname' => 'required|string|max:100',
            'no_telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'bio' => 'nullable|string',
            'foto_profil' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'cv' => 'nullable|mimes:pdf|max:2048',
        ]);

        // Cek dan update foto profil jika ada
        if ($request->hasFile('foto_profil')) {
            $fotoPath = $request->file('foto_profil')->store('foto_profil', 'public');
            $validated['foto_profil'] = $fotoPath;
        }

        // Cek dan update CV jika ada (khusus untuk role 'pencari_kerja')
        if ($request->hasFile('cv') && $user->role === 'pencari_kerja') {
            $cvPath = $request->file('cv')->store('cv', 'public');
            $validated['cv'] = $cvPath;
        }

        // Hanya update jika ada perubahan pada data (menggunakan isDirty)
        $user->fill($validated);

        // Simpan perubahan hanya jika ada perubahan
        if ($user->isDirty()) {  // Mengecek jika ada perubahan
            $user->save();
        }

        return redirect('/users/' . $user->id)->with('success', 'Profil berhasil diperbarui!');
    }

}
