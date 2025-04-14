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
        <a href="{{ route('kalsel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Hulu Sungai Tengah</h2>
        <div class="grid">
            <a href="#"><button class="button"> Barabai</button></a>
            <a href="#"><button class="button"> Labuan Amas Selatan</button></a>
            <a href="#"><button class="button"> Labuan Amas Utara</button></a>
            <a href="#"><button class="button"> Batu Benawa</button></a>
            <a href="#"><button class="button"> Hantakan</button></a>
            <a href="#"><button class="button"> Lumbang</button></a>
            <a href="#"><button class="button"> Barabai Selatan</button></a>
            <a href="#"><button class="button"> Loksado</button></a>
            <a href="#"><button class="button"> Batang Alai Selatan</button></a>
            <a href="#"><button class="button"> Batang Alai Utara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
