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
        <a href="{{ route('yogya') }}"><div class="back-button">&larr;</div></a>
        <h2>Kecamatan di Sleman</h2>
        <div class="grid">
            <a href="#"><button class="button">Gamping</button></a>
            <a href="#"><button class="button">Maguwoharjo</button></a>
            <a href="#"><button class="button">Mlati</button></a>
            <a href="#"><button class="button">Prambanan</button></a>
            <a href="#"><button class="button">Kalasan</button></a>
            <a href="#"><button class="button">Turi</button></a>
            <a href="#"><button class="button">Seyegan</button></a>
            <a href="#"><button class="button">Cangkringan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
