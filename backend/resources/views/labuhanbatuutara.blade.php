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
        <a href="{{ route('sumut') }}"><div class="back-button">&larr;</div></a>
        <h2>Kecamatan Labuhanbatu Utara</h2>
        <div class="grid">
            <a href="#"><button class="button">Kualuh Hulu</button></a>
            <a href="#"><button class="button">Kualuh Selatan</button></a>
            <a href="#"><button class="button">Kualuh Hilir</button></a>
            <a href="#"><button class="button">Kualuh Leidong</button></a>
            <a href="#"><button class="button">Aek Kuo</button></a>
            <a href="#"><button class="button">Aek Natas</button></a>
            <a href="#"><button class="button">Marbau</button></a>
            <a href="#"><button class="button">Na IX-X</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
