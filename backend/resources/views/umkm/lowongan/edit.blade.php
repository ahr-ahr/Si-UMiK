<h2>Edit Lowongan</h2>

<form action="{{ route('umkm.lowongan.update', $lowongan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Judul:</label><br>
    <input type="text" name="judul" value="{{ old('judul', $lowongan->judul) }}"><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="deskripsi">{{ old('deskripsi', $lowongan->deskripsi) }}</textarea><br><br>

    <label>Kualifikasi:</label><br>
    <textarea name="kualifikasi">{{ old('kualifikasi', $lowongan->kualifikasi) }}</textarea><br><br>

    <label>Gaji:</label><br>
    <input type="text" name="gaji" value="{{ old('gaji', $lowongan->gaji) }}"><br><br>

    <label>Lokasi Kerja:</label><br>
    <input type="text" name="lokasi_kerja" value="{{ old('lokasi_kerja', $lowongan->lokasi_kerja) }}"><br><br>

    <label>Jenis Pekerjaan:</label><br>
    <select name="jenis_pekerjaan">
        @foreach (['fulltime', 'parttime', 'magang', 'kontrak'] as $jenis)
            <option value="{{ $jenis }}" {{ $lowongan->jenis_pekerjaan === $jenis ? 'selected' : '' }}>
                {{ ucfirst($jenis) }}
            </option>
        @endforeach
    </select><br><br>

    <label>Tanggal Ditutup:</label><br>
    <input type="date" name="tanggal_ditutup" value="{{ old('tanggal_ditutup', $lowongan->tanggal_ditutup) }}"><br><br>

    <button type="submit">Update</button>
</form>
