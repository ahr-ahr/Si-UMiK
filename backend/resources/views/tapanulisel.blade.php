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
        <h2>Kabupaten Tapanuli Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button">Angkola Timur</button></a>
            <a href="#"><button class="button">Angkola Selatan</button></a>
            <a href="#"><button class="button">Angkola Utara</button></a>
            <a href="#"><button class="button">Batangtoru</button></a>
            <a href="#"><button class="button">Kecamatan Saipar Dolok Hole</button></a>
            <a href="#"><button class="button">Marancar</button></a>
            <a href="#"><button class="button">Muara Batangtoru</button></a>
            <a href="#"><button class="button">Pakkat</button></a>
            <a href="#"><button class="button">Rambutan</button></a>
            <a href="#"><button class="button">Sayur Matinggi</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
