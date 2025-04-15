<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pengguna</title>
</head>
<body>
    <h1>Daftar Pengguna</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status Akun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->status_akun }}</td>
                    <td>
                        <a href="{{ url('/users/' . $user->id) }}">Lihat</a>

                        <!-- Jika akun nonaktif dan email belum terverifikasi, tampilkan tombol kirim verifikasi -->
                        @if (!$user->hasVerifiedEmail())
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit">Kirim Ulang Link Verifikasi</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <form method="POST" action="{{ url('/logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
