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
        <a href="{{ route('sumaterasel') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Ogan Komering Ulu</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Baturaja Timur</button></a>
            <a href="#"><button class="button">Kecamatan Baturaja Barat</button></a>
            <a href="#"><button class="button">Kecamatan Ulu Ogan</button></a>
            <a href="#"><button class="button">Kecamatan Semidang Aji</button></a>
            <a href="#"><button class="button">Kecamatan Sumber Harta</button></a>
            <a href="#"><button class="button">Kecamatan Pengandonan</button></a>
            <a href="#"><button class="button">Kecamatan Lubuk Batang</button></a>
            <a href="#"><button class="button">Kecamatan Buay Pemuka Peliung</button></a>
            <a href="#"><button class="button">Kecamatan Lengkiti</button></a>
            <a href="#"><button class="button">Kecamatan Madang Suku I</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
