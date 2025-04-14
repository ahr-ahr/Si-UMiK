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
        <a href="{{ route('sultra') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Buton Tengah</h2>
        <div class="grid">
            <a href="#"><button class="button"> Kulisusu</button></a>
            <a href="#"><button class="button"> Kulisusu Barat</button></a>
            <a href="#"><button class="button"> Kulisusu Timur</button></a>
            <a href="#"><button class="button"> Mawasangka</button></a>
            <a href="#"><button class="button"> Mawasangka Timur</button></a>
            <a href="#"><button class="button"> Lasalimu</button></a>
            <a href="#"><button class="button"> Lasalimu Selatan</button></a>
            <a href="#"><button class="button"> Kapontori</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
