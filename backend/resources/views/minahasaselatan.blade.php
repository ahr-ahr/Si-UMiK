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
        <h2>Kabupaten Minahasa Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Amurang</button></a>
            <a href="#"><button class="button"> Amurang Barat</button></a>
            <a href="#"><button class="button"> Amurang Timur</button></a>
            <a href="#"><button class="button"> Tenga</button></a>
            <a href="#"><button class="button"> Tumpaan</button></a>
            <a href="#"><button class="button"> Motoling</button></a>
            <a href="#"><button class="button"> Ranoyapo</button></a>
            <a href="#"><button class="button"> Sinonsayang</button></a>
            <a href="#"><button class="button"> Tareran</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
