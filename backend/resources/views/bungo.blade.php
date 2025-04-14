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
        <h2>Kabupaten Bungo</h2>
        <div class="grid">
            <a href="#"><button class="button">Rantau Pandan</button></a>
            <a href="#"><button class="button">Bungo Dani</button></a>
            <a href="#"><button class="button">Jujuhan</button></a>
            <a href="#"><button class="button">Jujuhan Ilir</button></a>
            <a href="#"><button class="button">Tanah Sepenggal</button></a>
            <a href="#"><button class="button">Tanah Sepenggal Lintas</button></a>
            <a href="#"><button class="button">Muko-muko</button></a>
            <a href="#"><button class="button">Pelepat</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
