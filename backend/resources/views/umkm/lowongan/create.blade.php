<div class="container">
    <h2>Buat Lowongan Kerja</h2>
    <form action="{{ route('umkm.lowongan.store') }}" method="POST">
    @csrf

    <label>Judul:</label>
    <input type="text" name="judul" value="{{ old('judul') }}" required>

    <label>Deskripsi:</label>
    <textarea name="deskripsi" required>{{ old('deskripsi') }}</textarea>

    <label>Kualifikasi:</label>
    <textarea name="kualifikasi">{{ old('kualifikasi') }}</textarea>

    <label>Gaji:</label>
    <input type="text" name="gaji" value="{{ old('gaji') }}">

    <label>Lokasi Kerja:</label>
    <input type="text" name="lokasi_kerja" value="{{ old('lokasi_kerja') }}" required>

    <label>Jenis Pekerjaan:</label>
    <select name="jenis_pekerjaan" required>
        <option value="fulltime" {{ old('jenis_pekerjaan') == 'fulltime' ? 'selected' : '' }}>Fulltime</option>
        <option value="parttime" {{ old('jenis_pekerjaan') == 'parttime' ? 'selected' : '' }}>Parttime</option>
    </select>

    <label>Tanggal Ditutup:</label>
    <input type="date" name="tanggal_ditutup" value="{{ old('tanggal_ditutup') }}">

    <label>Status:</label>
    <select name="status" class="form-control">
        <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
        <option value="ditutup" {{ old('status') == 'ditutup' ? 'selected' : '' }}>Ditutup</option>
    </select>

    <button type="submit">Buat Lowongan</button>
</form>

</div>
