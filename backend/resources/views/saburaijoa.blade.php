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
        <h2>Kabupaten Sabu Raijua</h2>
        <div class="grid">
            <a href="#"><button class="button"> Sabu Barat</button></a>
            <a href="#"><button class="button"> Sabu Liae</button></a>
            <a href="#"><button class="button"> Sabu Tengah</button></a>
            <a href="#"><button class="button"> Sabu Timur</button></a>
            <a href="#"><button class="button"> Raijua</button></a>
            <a href="#"><button class="button"> Raijua Barat</button></a>
            <a href="#"><button class="button"> Raijua Timur</button></a>
            <a href="#"><button class="button"> Sabar</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
