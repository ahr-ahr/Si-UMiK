<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Pengguna</title>
</head>
<body>
    <h1>Detail Pengguna</h1>

    <ul>
        <li><strong>Nama Lengkap:</strong> {{ $user->fullname }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Role:</strong> {{ $user->role }}</li>
        <li><strong>Umur:</strong> {{ $user->umur }}</li>
        <li><strong>Tanggal Lahir:</strong> {{ $user->tanggal_lahir }}</li>
        <li><strong>Jenis Kelamin:</strong> {{ $user->jenis_kelamin }}</li>
        <li><strong>No Telepon:</strong> {{ $user->no_telepon }}</li>
        <li><strong>Alamat:</strong> {{ $user->alamat }}</li>
        <li><strong>Kota:</strong> {{ $user->kota }}</li>
        <li><strong>Provinsi:</strong> {{ $user->provinsi }}</li>
        <li><strong>Status Akun:</strong> {{ $user->status_akun }}</li>
        <li><strong>Keahlian:</strong> {{ $user->keahlian ?? '-' }}</li>
    </ul>

    <a href="{{ url('/users/dashboard') }}">Kembali ke Dashboard</a>
</body>
</html>
