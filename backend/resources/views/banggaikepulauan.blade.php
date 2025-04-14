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
        <h2>Kabupaten Banggai Kepulauan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Banggai</button></a>
            <a href="#"><button class="button"> Banggai Utara</button></a>
            <a href="#"><button class="button"> Banggai Tengah</button></a>
            <a href="#"><button class="button"> Banggai Selatan</button></a>
            <a href="#"><button class="button"> Peling Tengah</button></a>
            <a href="#"><button class="button"> Peling Barat</button></a>
            <a href="#"><button class="button"> Peling Timur</button></a>
            <a href="#"><button class="button"> Tinangkung</button></a>
            <a href="#"><button class="button"> Tinangkung Selatan</button></a>
            <a href="#"><button class="button"> Tinangkung Utara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
