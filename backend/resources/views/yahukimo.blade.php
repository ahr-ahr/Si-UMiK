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
        <h2>Kabupaten Yahukimo</h2>
        <div class="grid">
            <a href="#"><button class="button"> Dekai</button></a>
            <a href="#"><button class="button"> Kurima</button></a>
            <a href="#"><button class="button"> Kwiyawagi</button></a>
            <a href="#"><button class="button"> Bonggo</button></a>
            <a href="#"><button class="button"> Ninia</button></a>
            <a href="#"><button class="button"> Seradala</button></a>
            <a href="#"><button class="button"> Subyak</button></a>
            <a href="#"><button class="button"> Idoni</button></a>
            <a href="#"><button class="button"> Kemtuk Gresi</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
