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
        <h2>Kota Purworejo</h2>
        <div class="grid">
            <a href="#"><button class="button">Purworejo</button></a>
            <a href="#"><button class="button">Banyuurip</button></a>
            <a href="#"><button class="button">Bagelen</button></a>
            <a href="#"><button class="button">Kaligesing</button></a>
            <a href="#"><button class="button">Loano</button></a>
            <a href="#"><button class="button">Bener</button></a>
            <a href="#"><button class="button">Pituruh</button></a>
            <a href="#"><button class="button">Gebang</button></a>
            <a href="#"><button class="button">Kutoarjo</button></a>
            <a href="#"><button class="button">Kejajar</button></a>
            <a href="#"><button class="button">Purwodadi</button></a>
            <a href="#"><button class="button">Winong</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
