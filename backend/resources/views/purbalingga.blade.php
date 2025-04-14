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
        <h2>Kota Purbalingga</h2>
        <div class="grid">
            <a href="#"><button class="button">Purbalingga</button></a>
            <a href="#"><button class="button">Kutasari</button></a>
            <a href="#"><button class="button">Karangmoncol</button></a>
            <a href="#"><button class="button">Kemangkon</button></a>
            <a href="#"><button class="button">Kaligondang</button></a>
            <a href="#"><button class="button">Mrebet</button></a>
            <a href="#"><button class="button">Bojong</button></a>
            <a href="#"><button class="button">Padamara</button></a>
            <a href="#"><button class="button">Rembang</button></a>
            <a href="#"><button class="button">Cilongok</button></a>
            <a href="#"><button class="button">Bobotsari</button></a>
            <a href="#"><button class="button">Karanganyar</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
