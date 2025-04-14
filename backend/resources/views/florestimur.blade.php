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
        <a href="{{ route('NTT') }}"><div class="back-button">&larr;</div></a> 
        <h2>Kabupaten Flores Timur</h2>
        <div class="grid">
            <a href="#"><button class="button"> Adonara</button></a>
            <a href="#"><button class="button"> Adonara Barat</button></a>
            <a href="#"><button class="button"> Larantuka</button></a>
            <a href="#"><button class="button"> Solor</button></a>
            <a href="#"><button class="button"> Solor Barat</button></a>
            <a href="#"><button class="button"> Solor Timur</button></a>
            <a href="#"><button class="button"> Tanjung Bunga</button></a>
            <a href="#"><button class="button"> Witihama</button></a>
            <a href="#"><button class="button"> Ile Bura</button></a>
            <a href="#"><button class="button"> Ile Ape</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
