<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LowonganKerjaController extends Controller
{
    public function create()
{
    return view('umkm.lowongan.create');
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

    $umkm = \App\Models\UMKM::where('user_id', auth()->id())->firstOrFail();

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

    return redirect()->route('umkm.dashboard')->with('success', 'Lowongan berhasil diposting.');
}

}
