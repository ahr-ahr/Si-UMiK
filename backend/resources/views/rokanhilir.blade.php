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
        <h2>Kabupaten Rokan Hilir</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Bangko</button></a>
            <a href="#"><button class="button">Kecamatan Sinaboi</button></a>
            <a href="#"><button class="button">Kecamatan Rimba Melintang</button></a>
            <a href="#"><button class="button">Kecamatan Tanah Putih</button></a>
            <a href="#"><button class="button">Kecamatan Tanah Putih Tanjung Melawan</button></a>
            <a href="#"><button class="button">Kecamatan Pujud</button></a>
            <a href="#"><button class="button">Kecamatan Bagan Sinembah</button></a>
            <a href="#"><button class="button">Kecamatan Kubu</button></a>
            <a href="#"><button class="button">Kecamatan Pasir Limau Kapas</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
