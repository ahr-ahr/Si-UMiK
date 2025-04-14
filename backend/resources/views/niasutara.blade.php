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
        <a href="{{ route('sumut') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Nias Utara</h2>
        <div class="grid">
            <a href="#"><button class="button">Gunungsitoli</button></a>
            <a href="#"><button class="button">Alasa</button></a>
            <a href="#"><button class="button">Alasa Talumuzoi</button></a>
            <a href="#"><button class="button">Lotu</button></a>
            <a href="#"><button class="button">Tuhemberua</button></a>
            <a href="#"><button class="button">Sogae'adadi</button></a>
            <a href="#"><button class="button">Idano Gawo</button></a>
            <a href="#"><button class="button">Otolawu</button></a>
            <a href="#"><button class="button">Ulu Idanogawo</button></a>
            <a href="#"><button class="button">Gomo</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
