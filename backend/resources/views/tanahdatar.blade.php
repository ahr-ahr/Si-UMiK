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
        <a href="{{ route('sumbar') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Tanah Datar</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Batusangkar</button></a>
            <a href="#"><button class="button">Kecamatan Tanjung Emas</button></a>
            <a href="#"><button class="button">Kecamatan Salimpaung</button></a>
            <a href="#"><button class="button">Kecamatan Lintau Buo</button></a>
            <a href="#"><button class="button">Kecamatan Sungai Tarab</button></a>
            <a href="#"><button class="button">Kecamatan Padang Ganting</button></a>
            <a href="#"><button class="button">Kecamatan Pariangan</button></a>
            <a href="#"><button class="button">Kecamatan Rambatan</button></a>
            <a href="#"><button class="button">Kecamatan X Koto</button></a>
            <a href="#"><button class="button">Kecamatan Batipuh</button></a>
            <a href="#"><button class="button">Kecamatan Batipuh Selatan</button></a>
            <a href="#"><button class="button">Kecamatan Sungai Pua</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
