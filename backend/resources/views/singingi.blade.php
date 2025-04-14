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
        <h2>Kabupaten Kuantan Singingi</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Kuantan Mudik</button></a>
            <a href="#"><button class="button">Kecamatan Kuantan Tengah</button></a>
            <a href="#"><button class="button">Kecamatan Sentajo Raya</button></a>
            <a href="#"><button class="button">Kecamatan Kuantan Hilir</button></a>
            <a href="#"><button class="button">Kecamatan Kuantan Hilir Seberang</button></a>
            <a href="#"><button class="button">Kecamatan Gunung Toar</button></a>
            <a href="#"><button class="button">Kecamatan Pangean</button></a>
            <a href="#"><button class="button">Kecamatan Cerenti</button></a>
            <a href="#"><button class="button">Kecamatan Logas Tanah Darat</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
