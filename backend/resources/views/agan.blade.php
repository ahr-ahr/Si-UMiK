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
        <h2>Kabupaten Agan</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Sukarame</button></a>
            <a href="#"><button class="button">Kecamatan Melati</button></a>
            <a href="#"><button class="button">Kecamatan Harapan Jaya</button></a>
            <a href="#"><button class="button">Kecamatan Mekar Sari</button></a>
            <a href="#"><button class="button">Kecamatan Sumber Rejeki</button></a>
            <a href="#"><button class="button">Kecamatan Maju Bersama</button></a>
            <a href="#"><button class="button">Kecamatan Jaya Abadi</button></a>
            <a href="#"><button class="button">Kecamatan Tanjung Makmur</button></a>
            <a href="#"><button class="button">Kecamatan Damai Sentosa</button></a>
            <a href="#"><button class="button">Kecamatan Karya Indah</button></a>
            <a href="#"><button class="button">Kecamatan Lestari</button></a>
            <a href="#"><button class="button">Kecamatan Sejahtera</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
