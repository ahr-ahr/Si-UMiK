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
        <a href="{{ route('sulteng') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Poso</h2>
        <div class="grid">
            <a href="#"><button class="button"> Poso Kota</button></a>
            <a href="#"><button class="button"> Poso Pesisir</button></a>
            <a href="#"><button class="button"> Poso Pesisir Utara</button></a>
            <a href="#"><button class="button"> Poso Pesisir Selatan</button></a>
            <a href="#"><button class="button"> Lage</button></a>
            <a href="#"><button class="button"> South Poso</button></a>
            <a href="#"><button class="button"> Pamona Pesisir</button></a>
            <a href="#"><button class="button"> Sausu</button></a>
            <a href="#"><button class="button"> Touna</button></a>
            <a href="#"><button class="button"> Tolai</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
