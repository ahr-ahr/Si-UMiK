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
        <a href="{{ route('papuabar') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Maybrat</h2>
        <div class="grid">
            <a href="#"><button class="button"> Aifat</button></a>
            <a href="#"><button class="button"> Aifat Timur</button></a>
            <a href="#"><button class="button"> Aifat Barat</button></a>
            <a href="#"><button class="button"> Mubrani</button></a>
            <a href="#"><button class="button"> Misool Selatan</button></a>
            <a href="#"><button class="button"> Klasovik</button></a>
            <a href="#"><button class="button"> Fakfak Timur</button></a>
            <a href="#"><button class="button"> Selayang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
