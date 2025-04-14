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
        <h2>Kota Toba Samosir</h2>
        <div class="grid">
            <a href="#"><button class="button">Balige</button></a>
            <a href="#"><button class="button">Ajibata</button></a>
            <a href="#"><button class="button">Tuktuk</button></a>
            <a href="#"><button class="button">Siantar Narumonda</button></a>
            <a href="#"><button class="button">Lumban Julu</button></a>
            <a href="#"><button class="button">Habinsaran</button></a>
            <a href="#"><button class="button">Onan Ganjang</button></a>
            <a href="#"><button class="button">Pangaribuan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
