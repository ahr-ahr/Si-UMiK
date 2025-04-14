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
        <a href="{{ route('kalsel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Tabalong</h2>
        <div class="grid">
            <a href="#"><button class="button"> Murung Pudak</button></a>
            <a href="#"><button class="button"> Tanjung</button></a>
            <a href="#"><button class="button"> Haruai</button></a>
            <a href="#"><button class="button"> Bintang Ara</button></a>
            <a href="#"><button class="button"> Upau</button></a>
            <a href="#"><button class="button"> Pugaan</button></a>
            <a href="#"><button class="button"> Jaro</button></a>
            <a href="#"><button class="button"> Tanta</button></a>
            <a href="#"><button class="button"> Polan</button></a>
            <a href="#"><button class="button"> Banua Lawas</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
