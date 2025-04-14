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
        <a href="{{ route('jawabarat') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Cimahi</h2>
        <div class="grid">
            <a href="#"><button class="button">Cimahi Selatan</button></a>
            <a href="#"><button class="button">Cimahi Utara</button></a>
            <a href="#"><button class="button">Cimahi Tengah</button></a>
            <a href="#"><button class="button">Cibabat</button></a>
            <a href="#"><button class="button">Panghegar</button></a>
            <a href="#"><button class="button">Ciremai</button></a>
            <a href="#"><button class="button">Kota Baru</button></a>
            <a href="#"><button class="button">Tengah</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
