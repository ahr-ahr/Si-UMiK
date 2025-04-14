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
        <h2>Kabupaten Sarolangun</h2>
        <div class="grid">
            <a href="#"><button class="button">Sarolangun</button></a>
            <a href="#"><button class="button">Pelawan</button></a>
            <a href="#"><button class="button">Limun</button></a>
            <a href="#"><button class="button">Mandiangin</button></a>
            <a href="#"><button class="button">Cangkat</button></a>
            <a href="#"><button class="button">Sungai Penuh</button></a>
            <a href="#"><button class="button">Lembah Masurai</button></a>
            <a href="#"><button class="button">Pauh</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
