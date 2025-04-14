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
        <h2>Kabupaten Bolaang Mongondow Timur</h2>
        <div class="grid">
            <a href="#"><button class="button"> Modayag</button></a>
            <a href="#"><button class="button"> Modayag Barat</button></a>
            <a href="#"><button class="button"> Mooat</button></a>
            <a href="#"><button class="button"> Nuangan</button></a>
            <a href="#"><button class="button"> Kotabunan</button></a>
            <a href="#"><button class="button"> Tutuyan</button></a>
            <a href="#"><button class="button"> Motongkad</button></a>
            <a href="#"><button class="button"> Atoga</button></a>
            <a href="#"><button class="button"> Bulawan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
