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
        <a href="{{ route('sultra') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Kolaka Timur</h2>
        <div class="grid">
            <a href="#"><button class="button"> Ladongi</button></a>
            <a href="#"><button class="button"> Mowewe</button></a>
            <a href="#"><button class="button"> Tirawuta</button></a>
            <a href="#"><button class="button"> Polinggona</button></a>
            <a href="#"><button class="button"> Ueesi</button></a>
            <a href="#"><button class="button"> Wundulako</button></a>
            <a href="#"><button class="button"> Andoolo</button></a>
            <a href="#"><button class="button"> Kapoiala</button></a>
            <a href="#"><button class="button"> Baula</button></a>
            <a href="#"><button class="button"> Latambaga</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
