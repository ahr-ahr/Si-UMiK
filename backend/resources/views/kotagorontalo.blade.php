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
        <h2>Kota Gorontalo</h2>
        <div class="grid">
            <a href="#"><button class="button"> Dungingi</button></a>
            <a href="#"><button class="button"> Hulonthalangi</button></a>
            <a href="#"><button class="button"> Kota Selatan</button></a>
            <a href="#"><button class="button"> Kota Utara</button></a>
            <a href="#"><button class="button"> Sipatana</button></a>
            <a href="#"><button class="button"> Biawao</button></a>
            <a href="#"><button class="button"> Tenda</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
