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
        <a href="{{ route('sulut') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Kepulauan Talaud</h2>
        <div class="grid">
            <a href="#"><button class="button"> Beo</button></a>
            <a href="#"><button class="button"> Beo Utara</button></a>
            <a href="#"><button class="button"> Beo Selatan</button></a>
            <a href="#"><button class="button"> Melonguane</button></a>
            <a href="#"><button class="button"> Melonguane Timur</button></a>
            <a href="#"><button class="button"> Rainis</button></a>
            <a href="#"><button class="button"> Kabaruan</button></a>
            <a href="#"><button class="button"> Essang</button></a>
            <a href="#"><button class="button"> Nanusa</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
