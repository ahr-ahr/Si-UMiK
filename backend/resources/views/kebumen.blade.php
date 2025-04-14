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
        <h2>Kota Kebumen</h2>
        <div class="grid">
            <a href="#"><button class="button">Kebumen</button></a>
            <a href="#"><button class="button">Alian</button></a>
            <a href="#"><button class="button">Ambal</button></a>
            <a href="#"><button class="button">Karanganyar</button></a>
            <a href="#"><button class="button">Pejagoan</button></a>
            <a href="#"><button class="button">Poncowarno</button></a>
            <a href="#"><button class="button">Klirong</button></a>
            <a href="#"><button class="button">Prembun</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
