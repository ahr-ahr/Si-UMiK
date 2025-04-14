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
        <a href="{{ route('papuabar') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Teluk Wondama</h2>
        <div class="grid">
            <a href="#"><button class="button"> Rumberpon</button></a>
            <a href="#"><button class="button"> Wasior</button></a>
            <a href="#"><button class="button"> Teluk Duairi</button></a>
            <a href="#"><button class="button"> Momi Waren</button></a>
            <a href="#"><button class="button"> Windesi</button></a>
            <a href="#"><button class="button"> Yende</button></a>
            <a href="#"><button class="button"> Rasiei</button></a>
            <a href="#"><button class="button"> Nikiwar</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
