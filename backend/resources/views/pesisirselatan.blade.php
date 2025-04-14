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
        <h2>Kabupaten Pesisir Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Lengayang</button></a>
            <a href="#"><button class="button">Kecamatan Sutera</button></a>
            <a href="#"><button class="button">Kecamatan Batang Kapas</button></a>
            <a href="#"><button class="button">Kecamatan Bayang</button></a>
            <a href="#"><button class="button">Kecamatan IV Jurai</button></a>
            <a href="#"><button class="button">Kecamatan Koto XI Tarusan</button></a>
            <a href="#"><button class="button">Kecamatan Pancung Soal</button></a>
            <a href="#"><button class="button">Kecamatan Ranah Pesisir</button></a>
            <a href="#"><button class="button">Kecamatan Silaut</button></a>
            <a href="#"><button class="button">Kecamatan Basa Ampek Balai Tapan</button></a>
            <a href="#"><button class="button">Kecamatan Lunang</button></a>
            <a href="#"><button class="button">Kecamatan Airpura</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
