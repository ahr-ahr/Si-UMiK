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
        <h2>Kabupaten Tebo</h2>
        <div class="grid">
            <a href="#"><button class="button">Rimbo Bujang</button></a>
            <a href="#"><button class="button">Sumay</button></a>
            <a href="#"><button class="button">Tebo Ulu</button></a>
            <a href="#"><button class="button">Tebo Tengah</button></a>
            <a href="#"><button class="button">Muara Tebo</button></a>
            <a href="#"><button class="button">Tebo Ilir</button></a>
            <a href="#"><button class="button">Tebo Barat</button></a>
            <a href="#"><button class="button">Tebo Timur</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
