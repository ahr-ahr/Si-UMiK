<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temukan Pekerja</title>
</head>
<body>
    <h1>Halaman Temukan Pekerja</h1>

    <!-- 🔍 Form Pencarian -->
    <form action="{{ route('temukan.pekerja') }}" method="GET" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Cari pekerja..." value="{{ old('search', $keyword) }}">
        <button type="submit">Cari</button>
    </form>

    @if ($users->count())
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto Profil</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status Akun</th>
                    <th>CV</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>

                        <td>
                            @if ($user->foto_profil)
                                <img src="{{ asset('storage/' . $user->foto_profil) }}" alt="Foto Profil" width="80" height="80">
                            @else
                                <span>Tidak ada</span>
                            @endif
                        </td>

                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->status_akun }}</td>

                        <td>
                            @if ($user->cv && $user->role === 'pencari_kerja')
                                <div style="width: 300px; height: 400px; overflow: auto; border: 1px solid #ccc;">
                                    <embed src="{{ asset('storage/' . $user->cv) }}" type="application/pdf" width="100%" height="100%">
                                </div>
                                <br>
                                <a href="{{ asset('storage/' . $user->cv) }}" target="_blank">Download CV</a>
                            @else
                                <span>Tidak tersedia</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ url('/users/' . $user->id) }}">Lihat</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data pengguna ditemukan.</p>
    @endif
</body>
</html>
