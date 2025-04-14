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
        <h2>Kabupaten Kutai Barat</h2>
        <div class="grid">
            <a href="#"><button class="button"> Barong Tongkok</button></a>
            <a href="#"><button class="button"> Damai</button></a>
            <a href="#"><button class="button"> Jempang</button></a>
            <a href="#"><button class="button"> Kelempen</button></a>
            <a href="#"><button class="button"> Kota Bangun</button></a>
            <a href="#"><button class="button"> Linggang Bigung</button></a>
            <a href="#"><button class="button"> Muara Pahu</button></a>
            <a href="#"><button class="button"> Melak</button></a>
            <a href="#"><button class="button"> Tering</button></a>
            <a href="#"><button class="button"> Muara Lawa</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
