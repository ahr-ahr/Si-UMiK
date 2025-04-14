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
        <h2>Kabupaten Luwu Timur</h2>
        <div class="grid">
            <a href="#"><button class="button"> Malili</button></a>
            <a href="#"><button class="button"> Towuti</button></a>
            <a href="#"><button class="button"> Burau</button></a>
            <a href="#"><button class="button"> Nuha</button></a>
            <a href="#"><button class="button"> Angkona</button></a>
            <a href="#"><button class="button"> Wasuponda</button></a>
            <a href="#"><button class="button"> Wotu</button></a>
            <a href="#"><button class="button"> Mangkutana</button></a>
            <a href="#"><button class="button"> Tomoni</button></a>
            <a href="#"><button class="button"> Tomoni Timur</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
