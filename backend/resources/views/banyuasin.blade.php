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
        <h2>Kabupaten Banyuasin</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Air Kumbang</button></a>
            <a href="#"><button class="button">Kecamatan Banyuasin I</button></a>
            <a href="#"><button class="button">Kecamatan Banyuasin II</button></a>
            <a href="#"><button class="button">Kecamatan Muara Padang</button></a>
            <a href="#"><button class="button">Kecamatan Makarti Jaya</button></a>
            <a href="#"><button class="button">Kecamatan Rambutan</button></a>
            <a href="#"><button class="button">Kecamatan Tanjung Lago</button></a>
            <a href="#"><button class="button">Kecamatan Suak Tapeh</button></a>
            <a href="#"><button class="button">Kecamatan Sembawa</button></a>
            <a href="#"><button class="button">Kecamatan Muara Sugihan</button></a>
            <a href="#"><button class="button">Kecamatan Betung</button></a>
            <a href="#"><button class="button">Kecamatan Pulau Rimau</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
