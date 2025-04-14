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
        <h2>Kota Kendal</h2>
        <div class="grid">
            <a href="#"><button class="button">Kendal Kota</button></a>
            <a href="#"><button class="button">Ngampel</button></a>
            <a href="#"><button class="button">Cepiring</button></a>
            <a href="#"><button class="button">Patean</button></a>
            <a href="#"><button class="button">Singorojo</button></a>
            <a href="#"><button class="button">Weleri</button></a>
            <a href="#"><button class="button">Brangsong</button></a>
            <a href="#"><button class="button">Kaliwungu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
