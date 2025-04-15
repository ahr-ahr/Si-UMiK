<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profil</title>
</head>
<body>
    <h1>Edit Profil</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nama Lengkap:</label><br>
        <input type="text" name="fullname" value="{{ old('fullname', $user->fullname) }}" required><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="no_telepon" value="{{ old('no_telepon', $user->no_telepon) }}" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required>{{ old('alamat', $user->alamat) }}</textarea><br><br>

        <label>Bio:</label><br>
        <textarea name="bio">{{ old('bio', $user->bio) }}</textarea><br><br>

        @if ($user->role === 'pencari_kerja')
            <label>Upload CV (PDF, max 2MB):</label><br>
            @if ($user->cv)
                <a href="{{ asset('storage/' . $user->cv) }}" target="_blank">Lihat CV Lama</a><br>
            @endif
            <input type="file" name="cv" accept=".pdf"><br><br>
        @endif

        <label>Foto Profil (JPG/PNG, max 2MB):</label><br>
        @if ($user->foto_profil)
            <img src="{{ asset('storage/' . $user->foto_profil) }}" width="100" alt="Foto Profil"><br>
        @endif
        <input type="file" name="foto_profil" accept="image/*"><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>
    <a href="{{ url('/users/dashboard') }}">Kembali ke Dashboard</a>
    <a href="{{ url('/users/' . $user->id) }}">Kembali ke Profil</a>
</body>
</html>
