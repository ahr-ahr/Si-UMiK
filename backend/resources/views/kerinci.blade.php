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
        <h2>Kabupaten Kerinci</h2>
        <div class="grid">
            <a href="#"><button class="button">Sungai Penuh</button></a>
            <a href="#"><button class="button">Kebun Tebu</button></a>
            <a href="#"><button class="button">Air Hangat</button></a>
            <a href="#"><button class="button">Gunung Kerinci</button></a>
            <a href="#"><button class="button">Kayu Aro</button></a>
            <a href="#"><button class="button">Siulak</button></a>
            <a href="#"><button class="button">Pauh</button></a>
            <a href="#"><button class="button">Koto Barh</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
