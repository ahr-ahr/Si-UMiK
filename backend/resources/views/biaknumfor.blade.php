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
        <h2>Kabupaten Biak Numfor</h2>
        <div class="grid">
            <a href="#"><button class="button"> Biak</button></a>
            <a href="#"><button class="button"> Yendidori</button></a>
            <a href="#"><button class="button"> Samofa</button></a>
            <a href="#"><button class="button"> Aimando</button></a>
            <a href="#"><button class="button"> Supiori</button></a>
            <a href="#"><button class="button"> Numfor</button></a>
            <a href="#"><button class="button"> Waigeo</button></a>
            <a href="#"><button class="button"> Waria</button></a>
            <a href="#"><button class="button"> Andai</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
