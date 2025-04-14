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
        <h2>Kabupaten Majalengka</h2>
        <div class="grid">
            <a href="#"><button class="button">Majalengka</button></a>
            <a href="#"><button class="button">Cigasong</button></a>
            <a href="#"><button class="button">Leuwimunding</button></a>
            <a href="#"><button class="button">Rajagaluh</button></a>
            <a href="#"><button class="button">Malausma</button></a>
            <a href="#"><button class="button">Jatitujuh</button></a>
            <a href="#"><button class="button">Sumberjaya</button></a>
            <a href="#"><button class="button">Ligung</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
