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
        <a href="{{ route('yogya') }}"><div class="back-button">&larr;</div></a>
        <h2>Kecamatan di Bantul</h2>
        <div class="grid">
            <a href="#"><button class="button">Bantul</button></a>
            <a href="#"><button class="button">Bantul Selatan</button></a>
            <a href="#"><button class="button">Pundong</button></a>
            <a href="#"><button class="button">Sanden</button></a>
            <a href="#"><button class="button">Sewon</button></a>
            <a href="#"><button class="button">Kasihan</button></a>
            <a href="#"><button class="button">Pajangan</button></a>
            <a href="#"><button class="button">Mangunan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
