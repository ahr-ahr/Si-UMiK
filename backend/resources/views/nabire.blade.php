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
        <h2>Kabupaten Nabire</h2>
        <div class="grid">
            <a href="#"><button class="button"> Nabire</button></a>
            <a href="#"><button class="button"> Siriwo</button></a>
            <a href="#"><button class="button"> Yaro</button></a>
            <a href="#"><button class="button"> Makimi</button></a>
            <a href="#"><button class="button"> Wanggar</button></a>
            <a href="#"><button class="button"> Nabire Barat</button></a>
            <a href="#"><button class="button"> Nabire Selatan</button></a>
            <a href="#"><button class="button"> Teluk Kimi</button></a>
            <a href="#"><button class="button"> Moora</button></a>
            <a href="#"><button class="button"> Sima</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
