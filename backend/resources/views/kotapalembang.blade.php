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
        <h2>Kota Palembang</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Ilir Barat I</button></a>
            <a href="#"><button class="button">Kecamatan Ilir Barat II</button></a>
            <a href="#"><button class="button">Kecamatan Ilir Timur I</button></a>
            <a href="#"><button class="button">Kecamatan Ilir Timur II</button></a>
            <a href="#"><button class="button">Kecamatan Kemuning</button></a>
            <a href="#"><button class="button">Kecamatan Seberang Ulu I</button></a>
            <a href="#"><button class="button">Kecamatan Seberang Ulu II</button></a>
            <a href="#"><button class="button">Kecamatan Sako</button></a>
            <a href="#"><button class="button">Kecamatan Alang-Alang Lebar</button></a>
            <a href="#"><button class="button">Kecamatan Gandus</button></a>
            <a href="#"><button class="button">Kecamatan Bukit Kecil</button></a>
            <a href="#"><button class="button">Kecamatan Plaju</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
