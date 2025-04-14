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
        <a href="{{ route('sulasel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kota Makassar</h2>
        <div class="grid">
            <a href="#"><button class="button"> Biringkanaya</button></a>
            <a href="#"><button class="button"> Panakkukang</button></a>
            <a href="#"><button class="button"> Tallo</button></a>
            <a href="#"><button class="button"> Ujung Pandang</button></a>
            <a href="#"><button class="button"> Manggala</button></a>
            <a href="#"><button class="button"> Rappocini</button></a>
            <a href="#"><button class="button"> Tamalanrea</button></a>
            <a href="#"><button class="button"> Mariso</button></a>
            <a href="#"><button class="button"> Makassar</button></a>
            <a href="#"><button class="button"> Wajo</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
