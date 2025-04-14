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
        <a href="{{ route('bali') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Buleleng</h2>
        <div class="grid">
            <a href="#"><button class="button">Buleleng</button></a>
            <a href="#"><button class="button">Singaraja</button></a>
            <a href="#"><button class="button">Tejakula</button></a>
            <a href="#"><button class="button">Seririt</button></a>
            <a href="#"><button class="button">Guci</button></a>
            <a href="#"><button class="button">Busungbiu</button></a>
            <a href="#"><button class="button">Kubutambahan</button></a>
            <a href="#"><button class="button">Banjar</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
