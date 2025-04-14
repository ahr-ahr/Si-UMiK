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
        <h2>Kabupaten Ogan Komering Ulu Timur</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Martapura</button></a>
            <a href="#"><button class="button">Kecamatan Belitang</button></a>
            <a href="#"><button class="button">Kecamatan Belitang Madang Raya</button></a>
            <a href="#"><button class="button">Kecamatan Belitang Mulya</button></a>
            <a href="#"><button class="button">Kecamatan Buay Pemaca</button></a>
            <a href="#"><button class="button">Kecamatan Buay Sandang Aji</button></a>
            <a href="#"><button class="button">Kecamatan Buay Rawan</button></a>
            <a href="#"><button class="button">Kecamatan Semidang Aji</button></a>
            <a href="#"><button class="button">Kecamatan Sekampung</button></a>
            <a href="#"><button class="button">Kecamatan Pangkal</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
