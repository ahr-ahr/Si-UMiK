<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('users.index', compact('user'));
    }

    public function sdmI(Request $request)
    {
        $keyword = $request->input('search');

        $users = User::query();

        if ($keyword) {
            $users->where(function ($query) use ($keyword) {
                $query->where('fullname', 'like', "%{$keyword}%")
                    ->orWhere('alamat', 'like', "%{$keyword}%")
                    ->orWhere('bio', 'like', "%{$keyword}%")
                    ->orWhere('no_telepon', 'like', "%{$keyword}%");
            });
        }

        $users = $users->get();

        return view('layanan.sdm.temukan-pekerja', compact('users', 'keyword'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->id !== $user->id && auth()->user()->role !== 'admin') {
            abort(403);
        }

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->id !== $user->id && auth()->user()->role !== 'admin') {
            abort(403);
        }

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
