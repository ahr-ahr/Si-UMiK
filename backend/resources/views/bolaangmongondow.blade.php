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
        <a href="{{ route('sulut') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Bolaang Mongondow</h2>
        <div class="grid">
            <a href="#"><button class="button"> Lolak</button></a>
            <a href="#"><button class="button"> Passi Barat</button></a>
            <a href="#"><button class="button"> Passi Timur</button></a>
            <a href="#"><button class="button"> Poigar</button></a>
            <a href="#"><button class="button"> Dumoga</button></a>
            <a href="#"><button class="button"> Dumoga Timur</button></a>
            <a href="#"><button class="button"> Dumoga Barat</button></a>
            <a href="#"><button class="button"> Lolayan</button></a>
            <a href="#"><button class="button"> Sang Tombolang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
