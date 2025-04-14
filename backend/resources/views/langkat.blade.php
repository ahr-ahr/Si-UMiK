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
        <h2>Kecamatan Langkat</h2>
        <div class="grid">
            <a href="#"><button class="button">Bahorok</button></a>
            <a href="#"><button class="button">Batang Serangan</button></a>
            <a href="#"><button class="button">Besitang</button></a>
            <a href="#"><button class="button">Binjai</button></a>
            <a href="#"><button class="button">Brandan Barat</button></a>
            <a href="#"><button class="button">Gebang</button></a>
            <a href="#"><button class="button">Hinai</button></a>
            <a href="#"><button class="button">Kuala</button></a>
            <a href="#"><button class="button">Kutambaru</button></a>
            <a href="#"><button class="button">Padang Tualang</button></a>
            <a href="#"><button class="button">Pematang Jaya</button></a>
            <a href="#"><button class="button">Salapian</button></a>
            <a href="#"><button class="button">Secanggang</button></a>
            <a href="#"><button class="button">Sei Bingei</button></a>
            <a href="#"><button class="button">Selesai</button></a>
            <a href="#"><button class="button">Sirapit</button></a>
            <a href="#"><button class="button">Stabat</button></a>
            <a href="#"><button class="button">Tanjung Pura</button></a>
            <a href="#"><button class="button">Wampu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
