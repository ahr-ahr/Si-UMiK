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
        <a href="{{ route('kalbar') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Kapuas Hulu</h2>
        <div class="grid">
            <a href="#"><button class="button"> Putussibau Selatan</button></a>
            <a href="#"><button class="button"> Putussibau Utara</button></a>
            <a href="#"><button class="button"> Bika</button></a>
            <a href="#"><button class="button"> Badau</button></a>
            <a href="#"><button class="button"> Silat Hilir</button></a>
            <a href="#"><button class="button"> Silat Hulu</button></a>
            <a href="#"><button class="button"> Embaloh Hilir</button></a>
            <a href="#"><button class="button"> Embaloh Hulu</button></a>
            <a href="#"><button class="button"> Seberuang</button></a>
            <a href="#"><button class="button"> Suhaid</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
