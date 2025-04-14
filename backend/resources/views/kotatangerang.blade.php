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
        <a href="{{ route('banten') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Tangerang</h2>
        <div class="grid">
            <a href="#"><button class="button">Cipondoh</button></a>
            <a href="#"><button class="button">Karawaci</button></a>
            <a href="#"><button class="button">Batu Ceper</button></a>
            <a href="#"><button class="button">Tangerang</button></a>
            <a href="#"><button class="button">Periuk</button></a>
            <a href="#"><button class="button">Ciledug</button></a>
            <a href="#"><button class="button">Larangan</button></a>
            <a href="#"><button class="button">Jatiuwung</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
