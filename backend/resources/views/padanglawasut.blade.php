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
        <h2>Kabupaten Padang Lawas Utara</h2>
        <div class="grid">
            <a href="#"><button class="button">Siabu</button></a>
            <a href="#"><button class="button">Simangambat</button></a>
            <a href="#"><button class="button">Huristak</button></a>
            <a href="#"><button class="button">Pakkat</button></a>
            <a href="#"><button class="button">Dolok</button></a>
            <a href="#"><button class="button">Gunungtua</button></a>
            <a href="#"><button class="button">Batu Bara</button></a>
            <a href="#"><button class="button">Huta Binang</button></a>
            <a href="#"><button class="button">Barumun Baru</button></a>
            <a href="#"><button class="button">Sibuhuan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
