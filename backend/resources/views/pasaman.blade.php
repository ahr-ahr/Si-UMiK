<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Daerah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href={{ asset('css/lokasi.css') }}>
</head>
<body>

    <div class="container">
        <a href="{{ route('sumbar') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Pasaman</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Lubuk Sikaping</button></a>
            <a href="#"><button class="button">Kecamatan Panti</button></a>
            <a href="#"><button class="button">Kecamatan Mapat Tunggul</button></a>
            <a href="#"><button class="button">Kecamatan Mapat Tunggul Selatan</button></a>
            <a href="#"><button class="button">Kecamatan Rao</button></a>
            <a href="#"><button class="button">Kecamatan Rao Utara</button></a>
            <a href="#"><button class="button">Kecamatan Rao Selatan</button></a>
            <a href="#"><button class="button">Kecamatan Padang Gelugur</button></a>
            <a href="#"><button class="button">Kecamatan Simpati</button></a>
            <a href="#"><button class="button">Kecamatan Bonjol</button></a>
            <a href="#"><button class="button">Kecamatan Dua Koto</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
