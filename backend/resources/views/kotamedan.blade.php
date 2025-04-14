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
        <a href="{{ route('sumut') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Medan</h2>
        <div class="grid">
            <a href="#"><button class="button">Medan Amplas</button></a>
            <a href="#"><button class="button">Medan Area</button></a>
            <a href="#"><button class="button">Medan Belawan</button></a>
            <a href="#"><button class="button">Medan Deli</button></a>
            <a href="#"><button class="button">Medan Helvetia</button></a>
            <a href="#"><button class="button">Medan Johor</button></a>
            <a href="#"><button class="button">Medan Kota</button></a>
            <a href="#"><button class="button">Medan Labuhan</button></a>
            <a href="#"><button class="button">Medan Marelan</button></a>
            <a href="#"><button class="button">Medan Perjuangan</button></a>
            <a href="#"><button class="button">Medan Petisah</button></a>
            <a href="#"><button class="button">Medan Satria</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
