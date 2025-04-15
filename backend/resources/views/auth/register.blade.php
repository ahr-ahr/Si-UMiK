<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/register') }}">
        @csrf

        <label>Nama Lengkap:</label><br>
        <input type="text" name="fullname" value="{{ old('fullname') }}" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" value="{{ old('umur') }}" required min="10" max="100"><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" required>
            <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required><br><br>

        <label>No Telepon:</label><br>
        <input type="text" name="no_telepon" value="{{ old('no_telepon') }}" required><br><br>

        <label>Provinsi:</label><br>
        <input type="text" name="provinsi" value="{{ old('provinsi') }}" required><br><br>

        <label>Kota:</label><br>
        <input type="text" name="kota" value="{{ old('kota') }}" required><br><br>

        <label>Kecamatan:</label><br>
        <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" required><br><br>

        <label>Kelurahan:</label><br>
        <input type="text" name="kelurahan" value="{{ old('kelurahan') }}" required><br><br>

        <label>Kode Pos:</label><br>
        <input type="text" name="kode_pos" value="{{ old('kode_pos') }}" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required>{{ old('alamat') }}</textarea><br><br>

        <label>Lulusan Sekolah Terakhir:</label><br>
        <input type="text" name="lulusan_sekolah_terakhir" value="{{ old('lulusan_sekolah_terakhir') }}" required><br><br>

        <label>Jurusan (Opsional):</label><br>
        <input type="text" name="jurusan" value="{{ old('jurusan') }}"><br><br>

        <label>Posisi Pekerjaan (Opsional):</label><br>
        <input type="text" name="posisi_pekerjaan" value="{{ old('posisi_pekerjaan') }}"><br><br>

        <label>Bio (Opsional):</label><br>
        <textarea name="bio">{{ old('bio') }}</textarea><br><br>

        <label>Keahlian (Opsional):</label><br>
        <textarea name="keahlian">{{ old('keahlian') }}</textarea><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Konfirmasi Password:</label><br>
        <input type="password" name="password_confirmation" required><br><br>

        <label>Role:</label><br>
        <select name="role" required>
            <option value="pencari_kerja" {{ old('role') == 'pencari_kerja' ? 'selected' : '' }}>Pencari Kerja</option>
            <option value="umkm" {{ old('role') == 'umkm' ? 'selected' : '' }}>UMKM</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
        </select><br><br>

        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun? <a href="{{ url('/login') }}">Login di sini</a></p>
</body>
</html>
