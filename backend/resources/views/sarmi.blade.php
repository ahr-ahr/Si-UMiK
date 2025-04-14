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
        <a href="{{ route('papua') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Sarmi</h2>
        <div class="grid">
            <a href="#"><button class="button"> Sarmi</button></a>
            <a href="#"><button class="button"> Pantai Timur</button></a>
            <a href="#"><button class="button"> Anggi Gida</button></a>
            <a href="#"><button class="button"> Jayapura</button></a>
            <a href="#"><button class="button"> Mamberamo</button></a>
            <a href="#"><button class="button"> Mamberamo Raya</button></a>
            <a href="#"><button class="button"> Torasi</button></a>
            <a href="#"><button class="button"> Trans</button></a>
            <a href="#"><button class="button"> Sarmi Barat</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
