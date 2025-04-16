<?php
namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Cek apakah user punya role 'umkm'
        if ($user->role !== 'umkm') {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        $umkm = $user->umkm;
        return view('umkm.index', compact('umkm'));
    }

    public function show($id)
    {
        $umkm = Umkm::with('user')->findOrFail($id);
        return view('umkm.show', compact('umkm'));
    }

    public function create()
    {
        $user = Auth::user();

        // Cek apakah user punya role 'umkm'
        if ($user->role !== 'umkm') {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        $umkm = $user->umkm;
        return view('umkm.create', compact('umkm'));
    }
    public function edit()
    {
        $user = Auth::user();

        // Cek apakah user punya role 'umkm'
        if ($user->role !== 'umkm') {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        $umkm = $user->umkm;
        return view('umkm.edit', compact('umkm'));
    }

    public function update(Request $request, $id)
    {
        $umkm = Umkm::findOrFail($id);

        if (Auth::id() !== $umkm->user_id) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit data ini.');
        }

        $request->validate([
            'nama_umkm' => 'required|string|max:100',
            'bidang_usaha' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'tahun_berdiri' => 'nullable|digits:4|integer|min:1900|max:' . date('Y'),
            'jumlah_karyawan' => 'nullable|integer|min:0',
            'website' => 'nullable|url|max:255',
            'email_umkm' => 'nullable|email|max:100',
            'no_telepon_umkm' => 'nullable|string|max:20',
            'provinsi' => 'required|string|max:100',
            'kota' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kelurahan' => 'required|string|max:100',
            'kode_pos' => 'nullable|string|max:10',
            'alamat_lengkap' => 'required|string',
            'status' => 'nullable|in:aktif,nonaktif',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            if ($umkm->logo && Storage::disk('public')->exists($umkm->logo)) {
                Storage::disk('public')->delete($umkm->logo);
            }

            $data['logo'] = $request->file('logo')->store('logo_umkm', 'public');
        }

        $umkm->fill($data);

        if ($umkm->isDirty()) {
            $umkm->save();
            return redirect()->route('umkm.index')->with('success', 'Data UMKM berhasil diperbarui.');
        } else {
            return redirect()->route('umkm.index')->with('info', 'Tidak ada perubahan pada data UMKM.');
        }
    }

    public function destroy($id)
    {
        $umkm = Umkm::findOrFail($id);

        // Pastikan hanya pemilik yang boleh hapus
        if (Auth::id() !== $umkm->user_id) {
            abort(403, 'Anda tidak diizinkan menghapus data ini.');
        }

        // Hapus logo jika ada
        if ($umkm->logo) {
            Storage::disk('public')->delete($umkm->logo);
        }

        $umkm->delete();

        return redirect()->route('umkm.index')->with('success', 'Data UMKM berhasil dihapus.');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_umkm' => 'required|string|max:100',
            'bidang_usaha' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'tahun_berdiri' => 'nullable|digits:4|integer|min:1900|max:' . date('Y'),
            'jumlah_karyawan' => 'nullable|integer|min:0',
            'website' => 'nullable|url|max:255',
            'email_umkm' => 'nullable|email|max:100',
            'no_telepon_umkm' => 'nullable|string|max:20',
            'provinsi' => 'required|string|max:100',
            'kota' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kelurahan' => 'required|string|max:100',
            'kode_pos' => 'nullable|string|max:10',
            'alamat_lengkap' => 'required|string',
            'status' => 'nullable|in:aktif,nonaktif',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        // Simpan logo jika diupload
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logo_umkm', 'public');
        }

        Umkm::create($data);

        return redirect()->route('umkm.index')->with('success', 'Data UMKM berhasil disimpan.');
    }

}

?>