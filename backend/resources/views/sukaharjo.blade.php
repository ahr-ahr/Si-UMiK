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
        <a href="{{ route('jawatengah') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Sukoharjo</h2>
        <div class="grid">
            <a href="#"><button class="button">Baki</button></a>
            <a href="#"><button class="button">Bendosari</button></a>
            <a href="#"><button class="button">Bulu</button></a>
            <a href="#"><button class="button">Gatak</button></a>
            <a href="#"><button class="button">Grogol</button></a>
            <a href="#"><button class="button">Kartasura</button></a>
            <a href="#"><button class="button">Mojolaban</button></a>
            <a href="#"><button class="button">Nguter</button></a>
            <a href="#"><button class="button">Polokarto</button></a>
            <a href="#"><button class="button">Sukoharjo</button></a>
            <a href="#"><button class="button">Tawangsari</button></a>
            <a href="#"><button class="button">Weru</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
