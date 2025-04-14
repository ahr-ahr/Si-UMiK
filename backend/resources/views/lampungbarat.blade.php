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
        <a href="{{ route('lampung') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Lampung Barat</h2>
        <div class="grid">
            <a href="#"><button class="button">Liwa</button></a>
            <a href="#"><button class="button">Sumber Jaya</button></a>
            <a href="#"><button class="button">Way Tenong</button></a>
            <a href="#"><button class="button">Pesisir Selatan</button></a>
            <a href="#"><button class="button">Belalau</button></a>
            <a href="#"><button class="button">Batu Brak</button></a>
            <a href="#"><button class="button">Suoh</button></a>
            <a href="#"><button class="button">Air Hitam</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
