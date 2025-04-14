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
        <h2>Kabupaten Kepulauan Mentawai</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Sipora Utara</button></a>
            <a href="#"><button class="button">Kecamatan Sipora Selatan</button></a>
            <a href="#"><button class="button">Kecamatan Siberut Utara</button></a>
            <a href="#"><button class="button">Kecamatan Siberut Selatan</button></a>
            <a href="#"><button class="button">Kecamatan Siberut Barat</button></a>
            <a href="#"><button class="button">Kecamatan Siberut Tengah</button></a>
            <a href="#"><button class="button">Kecamatan Sikakap</button></a>
            <a href="#"><button class="button">Kecamatan Pagai Utara</button></a>
            <a href="#"><button class="button">Kecamatan Pagai Selatan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
