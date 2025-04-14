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
        <a href="{{ route('kaltim') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kota Samarinda</h2>
        <div class="grid">
            <a href="#"><button class="button"> Samarinda Ilir</button></a>
            <a href="#"><button class="button"> Samarinda Ulu</button></a>
            <a href="#"><button class="button"> Samarinda Seberang</button></a>
            <a href="#"><button class="button"> Samarinda Kota</button></a>
            <a href="#"><button class="button"> Samarinda Selatan</button></a>
            <a href="#"><button class="button"> Samarinda Utara</button></a>
            <a href="#"><button class="button"> Palaran</button></a>
            <a href="#"><button class="button"> Sungai Kunjang</button></a>
            <a href="#"><button class="button"> Samarinda Baru</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
