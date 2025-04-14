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
        <a href="{{ route('sulasel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Gowa</h2>
        <div class="grid">
            <a href="#"><button class="button"> Somba Opu</button></a>
            <a href="#"><button class="button"> Bontomarannu</button></a>
            <a href="#"><button class="button"> Biringkanaya</button></a>
            <a href="#"><button class="button"> Pallangga</button></a>
            <a href="#"><button class="button"> Manuju</button></a>
            <a href="#"><button class="button"> Tombolo Pao</button></a>
            <a href="#"><button class="button"> Bajeng</button></a>
            <a href="#"><button class="button"> Bajeng Barat</button></a>
            <a href="#"><button class="button"> Barombong</button></a>
            <a href="#"><button class="button"> Bontonompo</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
