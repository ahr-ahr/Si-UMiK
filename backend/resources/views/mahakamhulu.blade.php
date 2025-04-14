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
        <a href="{{ route('kaltim') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Mahakam Hulu</h2>
        <div class="grid">
            <a href="#"><button class="button"> Long Bagun</button></a>
            <a href="#"><button class="button"> Long Iram</button></a>
            <a href="#"><button class="button"> Long Hubung</button></a>
            <a href="#"><button class="button"> Laham</button></a>
            <a href="#"><button class="button"> Muara Pahu</button></a>
            <a href="#"><button class="button"> Penyinggahan</button></a>
            <a href="#"><button class="button"> Samu Bahu</button></a>
            <a href="#"><button class="button"> Barong Tongkok</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
