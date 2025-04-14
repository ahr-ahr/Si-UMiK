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
        <a href="{{ route('jawatengah') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Semarang</h2>
        <div class="grid">
            <a href="#"><button class="button">Semarang Tengah</button></a>
            <a href="#"><button class="button">Semarang Utara</button></a>
            <a href="#"><button class="button">Semarang Selatan</button></a>
            <a href="#"><button class="button">Semarang Timur</button></a>
            <a href="#"><button class="button">Semarang Barat</button></a>
            <a href="#"><button class="button">Gajahmungkur</button></a>
            <a href="#"><button class="button">Candisari</button></a>
            <a href="#"><button class="button">Tembalang</button></a>
            <a href="#"><button class="button">Pedurungan</button></a>
            <a href="#"><button class="button">Ngaliyan</button></a>
            <a href="#"><button class="button">Gunungpati</button></a>
            <a href="#"><button class="button">Mijen</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
