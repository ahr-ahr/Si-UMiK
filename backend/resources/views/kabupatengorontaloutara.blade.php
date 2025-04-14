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
        <a href="{{ route('gorontalo') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Gorontalo Utara</h2>
        <div class="grid">
            <a href="#"><button class="button"> Atinggola</button></a>
            <a href="#"><button class="button"> Kwandang</button></a>
            <a href="#"><button class="button"> Tibawa</button></a>
            <a href="#"><button class="button"> Biau</button></a>
            <a href="#"><button class="button"> Gentuma Raya</button></a>
            <a href="#"><button class="button"> Sumalata</button></a>
            <a href="#"><button class="button"> Sumalata Timur</button></a>
            <a href="#"><button class="button"> Tomilito</button></a>
            <a href="#"><button class="button"> Ponelo Kepulauan</button></a>
            <a href="#"><button class="button"> Botumoito</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
