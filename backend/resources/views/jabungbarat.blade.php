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
        <h2>Kabupaten Tanjung Jabung Barat</h2>
        <div class="grid">
            <a href="#"><button class="button">Betara</button></a>
            <a href="#"><button class="button">Renah Mendaluh</button></a>
            <a href="#"><button class="button">Tungkal Ilir</button></a>
            <a href="#"><button class="button">Tungkal Ulu</button></a>
            <a href="#"><button class="button">Bungo Tanjung</button></a>
            <a href="#"><button class="button">Senyerang</button></a>
            <a href="#"><button class="button">Seberang Kota</button></a>
            <a href="#"><button class="button">Merlung</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
