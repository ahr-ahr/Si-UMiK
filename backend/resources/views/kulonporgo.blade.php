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
        <h2>Kecamatan di Kulon Progo</h2>
        <div class="grid">
            <a href="#"><button class="button">Wates</button></a>
            <a href="#"><button class="button">Galur</button></a>
            <a href="#"><button class="button">Lendah</button></a>
            <a href="#"><button class="button">Nanggulan</button></a>
            <a href="#"><button class="button">Pengasih</button></a>
            <a href="#"><button class="button">Temon</button></a>
            <a href="#"><button class="button">Samigaluh</button></a>
            <a href="#"><button class="button">Kalibawang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
