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
        <h2>Kabupaten Malaka</h2>
        <div class="grid">
            <a href="#"><button class="button"> Malaka</button></a>
            <a href="#"><button class="button"> Malaka Barat</button></a>
            <a href="#"><button class="button"> Malaka Timur</button></a>
            <a href="#"><button class="button"> Laen Manen</button></a>
            <a href="#"><button class="button"> Wewiku</button></a>
            <a href="#"><button class="button"> Kobalima</button></a>
            <a href="#"><button class="button"> Kobalima Timur</button></a>
            <a href="#"><button class="button"> Banos</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
