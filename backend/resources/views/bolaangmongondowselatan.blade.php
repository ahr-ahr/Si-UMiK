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
        <h2>Kabupaten Bolaang Mongondow Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Bolaang Uki</button></a>
            <a href="#"><button class="button"> Helumo</button></a>
            <a href="#"><button class="button"> Tomini</button></a>
            <a href="#"><button class="button"> Posigadan</button></a>
            <a href="#"><button class="button"> Pinolosian</button></a>
            <a href="#"><button class="button"> Pinolosian Tengah</button></a>
            <a href="#"><button class="button"> Pinolosian Timur</button></a>
            <a href="#"><button class="button"> Bogani</button></a>
            <a href="#"><button class="button"> Ongkaw</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
