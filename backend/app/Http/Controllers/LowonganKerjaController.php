<?php

namespace App\Http\Controllers;

use App\Models\LowonganKerja;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LowonganKerjaController extends Controller
{
    // Tampilkan semua lowongan dari UMKM login beserta pelamar
    public function index()
{
    $user = Auth::user();

    if ($user->role !== 'umkm') {
        abort(403, 'Anda tidak memiliki akses ke halaman ini.');
    }

    $umkm = Umkm::where('user_id', $user->id)->firstOrFail();
    $lowongan = LowonganKerja::where('umkm_id', $umkm->id) // Hanya ambil lowongan milik UMKM
        ->latest()
        ->get(); // Tidak lagi dengan pelamar

    return view('umkm.lowongan.index', compact('umkm', 'lowongan'));
}


    // Form buat lowongan baru
    public function create()
    {
        $user = Auth::user();

        if ($user->role !== 'umkm') {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        $lowongan = new LowonganKerja();
        return view('umkm.lowongan.create', compact('lowongan'));
    }

    // Simpan data lowongan baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:150',
            'deskripsi' => 'required',
            'lokasi_kerja' => 'required',
            'jenis_pekerjaan' => 'required|in:fulltime,parttime,magang,kontrak',
            'tanggal_ditutup' => 'nullable|date',
        ]);

        $user = Auth::user();
        $umkm = Umkm::where('user_id', $user->id)->firstOrFail();

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

        return redirect()
            ->route('umkm.lowongan.index')
            ->with('success', 'Lowongan berhasil diposting.');
    }

    // Detail satu lowongan beserta pelamar
    public function show($id)
    {
        $lowongan = LowonganKerja::with('umkm')->findOrFail($id);
        return view('umkm.lowongan.show', compact('lowongan'));
    }

    public function semua()
{
    $user = Auth::user();

    $umkm = Umkm::where('user_id', $user->id)->firstOrFail();

    $lowongan = LowonganKerja::with('umkm')
        ->where('umkm_id', $umkm->id)
        ->latest()
        ->get();

    return view('umkm.lowongan.semua', compact('lowongan'));
}


    // Form edit lowongan
    public function edit($id)
    {
        $lowongan = LowonganKerja::findOrFail($id);
        return view('umkm.lowongan.edit', compact('lowongan'));
    }

    // Simpan hasil edit lowongan
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:150',
            'deskripsi' => 'required',
            'lokasi_kerja' => 'required',
            'jenis_pekerjaan' => 'required|in:fulltime,parttime,magang,kontrak',
            'tanggal_ditutup' => 'nullable|date',
        ]);

        $lowongan = LowonganKerja::findOrFail($id);
        $lowongan->update($request->all());

        return redirect()
            ->route('umkm.lowongan.index')
            ->with('success', 'Lowongan berhasil diperbarui.');
    }

    // Hapus lowongan
    public function destroy($id)
    {
        $lowongan = LowonganKerja::findOrFail($id);
        $lowongan->delete();

        return redirect()
            ->route('umkm.lowongan.index')
            ->with('success', 'Lowongan berhasil dihapus.');
    }
}
