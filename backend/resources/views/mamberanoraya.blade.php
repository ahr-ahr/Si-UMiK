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
        <a href="{{ route('papua') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Memberamo Raya</h2>
        <div class="grid">
            <a href="#"><button class="button"> Mamberamo Tengah</button></a>
            <a href="#"><button class="button"> Mamberamo Hulu</button></a>
            <a href="#"><button class="button"> Mamberamo Ilir</button></a>
            <a href="#"><button class="button"> Bintang</button></a>
            <a href="#"><button class="button"> Okaba</button></a>
            <a href="#"><button class="button"> Napan</button></a>
            <a href="#"><button class="button"> Kotis</button></a>
            <a href="#"><button class="button"> Kasonaweja</button></a>
            <a href="#"><button class="button"> Ransiki</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
