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
        <a href="{{ route('papua') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Jayawijaya</h2>
        <div class="grid">
            <a href="#"><button class="button"> Wamena</button></a>
            <a href="#"><button class="button"> Asologaima</button></a>
            <a href="#"><button class="button"> Maima</button></a>
            <a href="#"><button class="button"> Pigo</button></a>
            <a href="#"><button class="button"> Kurulu</button></a>
            <a href="#"><button class="button"> Napua</button></a>
            <a href="#"><button class="button"> Sumerlanggama</button></a>
            <a href="#"><button class="button"> Welesi</button></a>
            <a href="#"><button class="button"> Hitadipa</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
