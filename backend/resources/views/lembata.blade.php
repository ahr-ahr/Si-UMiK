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
        <a href="{{ route('NTT') }}"><div class="back-button">&larr;</div></a> 
        <h2>Kabupaten Lembata</h2>
        <div class="grid">
            <a href="#"><button class="button"> Atadei</button></a>
            <a href="#"><button class="button"> Ile Ape</button></a>
            <a href="#"><button class="button"> Ile Ape Timur</button></a>
            <a href="#"><button class="button"> Nubatukan</button></a>
            <a href="#"><button class="button"> Omesuri</button></a>
            <a href="#"><button class="button"> Waewalo</button></a>
            <a href="#"><button class="button"> Lebatukan</button></a>
            <a href="#"><button class="button"> Wulandoni</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
