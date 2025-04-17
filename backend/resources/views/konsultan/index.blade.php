<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Konsultan</title>
</head>
<body>
    <h1>Dashboard Konsultan</h1>

    @if ($konsultan)
        <p><strong>Nama:</strong> {{ $konsultan->user->fullname }}</p>
        <p><strong>Bidang Keahlian:</strong> {{ $konsultan->bidang_keahlian }}</p>
        <p><strong>Pengalaman:</strong> {{ $konsultan->pengalaman_tahun }} tahun</p>
        <p><strong>Sertifikasi:</strong> {{ $konsultan->sertifikasi }}</p>
        <p><strong>Portofolio:</strong> {{ $konsultan->portofolio }}</p>
        <p><strong>Biaya per Jam:</strong> Rp{{ number_format($konsultan->biaya_per_jam) }}</p>
        <p><strong>Biaya per Menit:</strong> Rp{{ number_format($konsultan->biaya_per_menit) }}</p>
        <p><strong>Rating:</strong> {{ $konsultan->rating ?? '-' }}</p>
        <p><strong>Jumlah Review:</strong> {{ $konsultan->jumlah_review }}</p>
        <p><strong>Jenis Konsultan:</strong> {{ $konsultan->jenis_konsultan }}</p>
    @else
        <p>Data konsultan belum tersedia.</p>
        <a href="{{ route('konsultan.create') }}">Lengkapi Profil Konsultan</a>
    @endif

</body>
</html>
