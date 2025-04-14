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
        <h2>Kabupaten Tolikara</h2>
        <div class="grid">
            <a href="#"><button class="button"> Karubaga</button></a>
            <a href="#"><button class="button"> Tolikara Tengah</button></a>
            <a href="#"><button class="button"> Gigimka</button></a>
            <a href="#"><button class="button"> Molinoma</button></a>
            <a href="#"><button class="button"> Bomela</button></a>
            <a href="#"><button class="button"> Kanggime</button></a>
            <a href="#"><button class="button"> Kembu</button></a>
            <a href="#"><button class="button"> Ninia</button></a>
            <a href="#"><button class="button"> Tiom</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
