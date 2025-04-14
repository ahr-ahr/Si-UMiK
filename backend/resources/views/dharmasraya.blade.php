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
        <h2>Kabupaten Dharmasraya</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Pulau Punjung</button></a>
            <a href="#"><button class="button">Kecamatan Koto Baru</button></a>
            <a href="#"><button class="button">Kecamatan Sitiung</button></a>
            <a href="#"><button class="button">Kecamatan Timpeh</button></a>
            <a href="#"><button class="button">Kecamatan Sungai Rumbai</button></a>
            <a href="#"><button class="button">Kecamatan Koto Besar</button></a>
            <a href="#"><button class="button">Kecamatan Asam Jujuhan</button></a>
            <a href="#"><button class="button">Kecamatan Padang Laweh</button></a>
            <a href="#"><button class="button">Kecamatan Tiumang</button></a>
            <a href="#"><button class="button">Kecamatan IX Koto</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
