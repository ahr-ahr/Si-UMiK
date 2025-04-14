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
        <a href="{{ route('pulauriau') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Batam</h2>
        <div class="grid">
            <a href="#"><button class="button">Batam Kota</button></a>
            <a href="#"><button class="button">Sekupang</button></a>
            <a href="#"><button class="button">Lubuk Baja</button></a>
            <a href="#"><button class="button">Nongsa</button></a>
            <a href="#"><button class="button">Batu Aji</button></a>
            <a href="#"><button class="button">Bengkong</button></a>
            <a href="#"><button class="button">Sungai Beduk</button></a>
            <a href="#"><button class="button">Belakang Padang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
