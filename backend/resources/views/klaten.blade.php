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
        <h2>Kota Klaten</h2>
        <div class="grid">
            <a href="#"><button class="button">Klaten Selatan</button></a>
            <a href="#"><button class="button">Klaten Utara</button></a>
            <a href="#"><button class="button">Juwiring</button></a>
            <a href="#"><button class="button">Polanharjo</button></a>
            <a href="#"><button class="button">Manisrenggo</button></a>
            <a href="#"><button class="button">Trucuk</button></a>
            <a href="#"><button class="button">Karangdowo</button></a>
            <a href="#"><button class="button">Cawas</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
