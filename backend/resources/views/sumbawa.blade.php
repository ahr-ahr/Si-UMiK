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
        <a href="{{ route('NTB') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Sumbawa</h2>
        <div class="grid">
            <a href="#"><button class="button">Alas</button></a>
            <a href="#"><button class="button">Alas Barat</button></a>
            <a href="#"><button class="button">Batulanteh</button></a>
            <a href="#"><button class="button">Buer</button></a>
            <a href="#"><button class="button">Empang</button></a>
            <a href="#"><button class="button">Labangka</button></a>
            <a href="#"><button class="button">Labuhan Badas</button></a>
            <a href="#"><button class="button">Lantung</button></a>
            <a href="#"><button class="button">Lape</button></a>
            <a href="#"><button class="button">Lenangguar</button></a>
            <a href="#"><button class="button">Lunyuk</button></a>
            <a href="#"><button class="button">Maronge</button></a>
            <a href="#"><button class="button">Moyo Hilir</button></a>
            <a href="#"><button class="button">Moyo Hulu</button></a>
            <a href="#"><button class="button">Moyo Utara</button></a>
            <a href="#"><button class="button">Orong Telu</button></a>
            <a href="#"><button class="button">Plampang</button></a>
            <a href="#"><button class="button">Rhee</button></a>
            <a href="#"><button class="button">Ropang</button></a>
            <a href="#"><button class="button">Sumbawa</button></a>
            <a href="#"><button class="button">Tarano</button></a>
            <a href="#"><button class="button">Unter Iwes</button></a>
            <a href="#"><button class="button">Utan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
