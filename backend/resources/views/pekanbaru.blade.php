<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Daerah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/lokasi.css') }}">
</head>
<body>

    <div class="container">
        <a href="{{ route('lokasiriau') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Pekanbaru</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Marpoyan Damai</button></a>
            <a href="#"><button class="button">Kecamatan Pekanbaru Kota</button></a>
            <a href="#"><button class="button">Kecamatan Tenayan Raya</button></a>
            <a href="#"><button class="button">Kecamatan Rumbai</button></a>
            <a href="#"><button class="button">Kecamatan Rumbai Pesisir</button></a>
            <a href="#"><button class="button">Kecamatan Bukit Raya</button></a>
            <a href="#"><button class="button">Kecamatan Limapuluh</button></a>
            <a href="#"><button class="button">Kecamatan Sail</button></a>
            <a href="#"><button class="button">Kecamatan Payung Sekaki</button></a>
            <a href="#"><button class="button">Kecamatan Kulim</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
