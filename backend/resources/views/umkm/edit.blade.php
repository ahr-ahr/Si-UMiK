<div class="container">
    <h1>Edit Data UMKM</h1>

    <form action="{{ route('umkm.update', $umkm->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Nama UMKM -->
        <div class="mb-3">
            <label for="nama_umkm" class="form-label">Nama UMKM</label>
            <input type="text" name="nama_umkm" id="nama_umkm" class="form-control" value="{{ old('nama_umkm', $umkm->nama_umkm) }}" required>
        </div>

        <!-- Bidang Usaha -->
        <div class="mb-3">
            <label for="bidang_usaha" class="form-label">Bidang Usaha</label>
            <input type="text" name="bidang_usaha" id="bidang_usaha" class="form-control" value="{{ old('bidang_usaha', $umkm->bidang_usaha) }}" required>
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Usaha</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi', $umkm->deskripsi) }}</textarea>
        </div>

        <!-- Tahun Berdiri -->
        <div class="mb-3">
            <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
            <input type="number" name="tahun_berdiri" id="tahun_berdiri" class="form-control" value="{{ old('tahun_berdiri', $umkm->tahun_berdiri) }}" min="1900" max="{{ date('Y') }}">
        </div>

        <!-- Jumlah Karyawan -->
        <div class="mb-3">
            <label for="jumlah_karyawan" class="form-label">Jumlah Karyawan</label>
            <input type="number" name="jumlah_karyawan" id="jumlah_karyawan" class="form-control" value="{{ old('jumlah_karyawan', $umkm->jumlah_karyawan) }}">
        </div>

        <!-- Website -->
        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" name="website" id="website" class="form-control" value="{{ old('website', $umkm->website) }}">
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email_umkm" class="form-label">Email UMKM</label>
            <input type="email" name="email_umkm" id="email_umkm" class="form-control" value="{{ old('email_umkm', $umkm->email_umkm) }}">
        </div>

        <!-- No Telepon -->
        <div class="mb-3">
            <label for="no_telepon_umkm" class="form-label">No Telepon</label>
            <input type="text" name="no_telepon_umkm" id="no_telepon_umkm" class="form-control" value="{{ old('no_telepon_umkm', $umkm->no_telepon_umkm) }}">
        </div>

        <!-- Alamat -->
        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" name="provinsi" id="provinsi" class="form-control" value="{{ old('provinsi', $umkm->provinsi) }}" required>
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota/Kabupaten</label>
            <input type="text" name="kota" id="kota" class="form-control" value="{{ old('kota', $umkm->kota) }}" required>
        </div>

        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="{{ old('kecamatan', $umkm->kecamatan) }}" required>
        </div>

        <div class="mb-3">
            <label for="kelurahan" class="form-label">Kelurahan</label>
            <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="{{ old('kelurahan', $umkm->kelurahan) }}" required>
        </div>

        <div class="mb-3">
            <label for="kode_pos" class="form-label">Kode Pos</label>
            <input type="text" name="kode_pos" id="kode_pos" class="form-control" value="{{ old('kode_pos', $umkm->kode_pos) }}">
        </div>

        <div class="mb-3">
            <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
            <textarea name="alamat_lengkap" id="alamat_lengkap" class="form-control" required>{{ old('alamat_lengkap', $umkm->alamat_lengkap) }}</textarea>
        </div>

        <!-- Logo -->
        <div class="mb-3">
            <label for="logo" class="form-label">Logo UMKM (jika ingin ganti)</label>
            <input type="file" name="logo" id="logo" class="form-control">
            @if ($umkm->logo)
                <p class="mt-2">Logo saat ini:</p>
                <img src="{{ asset('storage/' . $umkm->logo) }}" alt="Logo UMKM" width="150">
            @endif
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="aktif" {{ $umkm->status === 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ $umkm->status === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('umkm.show', $umkm->id) }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
