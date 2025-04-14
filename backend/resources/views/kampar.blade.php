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
        <a href="{{ route('riau') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Kampar</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Bangkinang</button></a>
            <a href="#"><button class="button">Kecamatan Bangkinang Kota</button></a>
            <a href="#"><button class="button">Kecamatan Kampar</button></a>
            <a href="#"><button class="button">Kecamatan Kampar Kiri</button></a>
            <a href="#"><button class="button">Kecamatan Kampar Kiri Hilir</button></a>
            <a href="#"><button class="button">Kecamatan Kampar Kiri Tengah</button></a>
            <a href="#"><button class="button">Kecamatan Koto Kampar Hulu</button></a>
            <a href="#"><button class="button">Kecamatan Kuok</button></a>
            <a href="#"><button class="button">Kecamatan Rumbio Jaya</button></a>
            <a href="#"><button class="button">Kecamatan Tapung</button></a>
            <a href="#"><button class="button">Kecamatan Tapung Hilir</button></a>
            <a href="#"><button class="button">Kecamatan Tambang</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
