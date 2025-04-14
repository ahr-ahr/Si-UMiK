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
        <a href="{{ route('jambi') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Sungai Penuh</h2>
        <div class="grid">
            <a href="#"><button class="button">Koto Baru</button></a>
            <a href="#"><button class="button">Pesisir Bukit</button></a>
            <a href="#"><button class="button">Sungai Penuh</button></a>
            <a href="#"><button class="button">Hamparan Rawang</button></a>
            <a href="#"><button class="button">Tanah Kampung</button></a>
            <a href="#"><button class="button">Jangkat</button></a>
            <a href="#"><button class="button">Pauh</button></a>
            <a href="#"><button class="button">Siulak</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
