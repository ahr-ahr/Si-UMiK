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
        <h2>Kabupaten Minahasa Tenggara</h2>
        <div class="grid">
            <a href="#"><button class="button"> Ratahan</button></a>
            <a href="#"><button class="button"> Belang</button></a>
            <a href="#"><button class="button"> Tombatu</button></a>
            <a href="#"><button class="button"> Tombatu Timur</button></a>
            <a href="#"><button class="button"> Touluaan</button></a>
            <a href="#"><button class="button"> Pasan</button></a>
            <a href="#"><button class="button"> Pusomaen</button></a>
            <a href="#"><button class="button"> Ratatotok</button></a>
            <a href="#"><button class="button"> Silian Raya</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
