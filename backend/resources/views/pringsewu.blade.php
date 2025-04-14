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
        <a href="{{ route('lampung') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Pringsewu</h2>
        <div class="grid">
            <a href="#"><button class="button">Pringsewu</button></a>
            <a href="#"><button class="button">Gadingrejo</button></a>
            <a href="#"><button class="button">Adiluwih</button></a>
            <a href="#"><button class="button">Pagelaran</button></a>
            <a href="#"><button class="button">Pagelaran Utara</button></a>
            <a href="#"><button class="button">Sukoharjo</button></a>
            <a href="#"><button class="button">Wates</button></a>
            <a href="#"><button class="button">Banyumas</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
