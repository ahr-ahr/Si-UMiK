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
        <h2>Kabupaten Tanah Laut</h2>
        <div class="grid">
            <a href="#"><button class="button"> Pelaihari</button></a>
            <a href="#"><button class="button"> Bati-Bati</button></a>
            <a href="#"><button class="button"> Jorong</button></a>
            <a href="#"><button class="button"> Kintap</button></a>
            <a href="#"><button class="button"> Takisung</button></a>
            <a href="#"><button class="button"> Panyipatan</button></a>
            <a href="#"><button class="button"> Batulicin</button></a>
            <a href="#"><button class="button"> Angsana</button></a>
            <a href="#"><button class="button"> Mantewe</button></a>
            <a href="#"><button class="button"> Karang Bunga</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
