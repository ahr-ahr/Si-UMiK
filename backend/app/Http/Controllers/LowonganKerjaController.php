<?php

namespace App\Http\Controllers;

use App\Models\LowonganKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class LowonganKerjaController extends Controller
{
    public function create()
    {
        $user = Auth::user();

        // Cek apakah user punya role 'umkm'
        if ($user->role !== 'umkm') {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        $lowongan = new LowonganKerja();
        return view('umkm.lowongan.create', compact('lowongan'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:150',
            'deskripsi' => 'required',
            'lokasi_kerja' => 'required',
            'jenis_pekerjaan' => 'required|in:fulltime,parttime,magang,kontrak',
            'tanggal_ditutup' => 'nullable|date',
        ]);

        $user = auth()->user();

        $umkm = \App\Models\Umkm::where('user_id', $user->id)->firstOrFail();

        LowonganKerja::create([
            'umkm_id' => $umkm->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kualifikasi' => $request->kualifikasi,
            'gaji' => $request->gaji,
            'lokasi_kerja' => $request->lokasi_kerja,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
            'tanggal_ditutup' => $request->tanggal_ditutup,
        ]);

        return redirect()->route('umkm.index')->with('success', 'Lowongan berhasil diposting.');
    }

}
