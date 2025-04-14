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
        <a href="{{ route('DKI') }}"><div class="back-button">&larr;</div></a>
        <h2>Jakarta Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button">Cilandak</button></a>
            <a href="#"><button class="button">Kebayoran Baru</button></a>
            <a href="#"><button class="button">Kebayoran Lama</button></a>
            <a href="#"><button class="button">Mampang Prapatan</button></a>
            <a href="#"><button class="button">Pancoran</button></a>
            <a href="#"><button class="button">Pasar Minggu</button></a>
            <a href="#"><button class="button">Setiabudi</button></a>
            <a href="#"><button class="button">Tebet</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
