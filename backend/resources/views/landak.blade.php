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
        <h2>Kabupaten Landak</h2>
        <div class="grid">
            <a href="#"><button class="button"> Ngabang</button></a>
            <a href="#"><button class="button"> Menyuke</button></a>
            <a href="#"><button class="button"> Jelimpo</button></a>
            <a href="#"><button class="button"> Mempawah Hulu</button></a>
            <a href="#"><button class="button"> Sengah Temila</button></a>
            <a href="#"><button class="button"> Sebangki</button></a>
            <a href="#"><button class="button"> Air Besar</button></a>
            <a href="#"><button class="button"> Meranti</button></a>
            <a href="#"><button class="button"> Paloh</button></a>
            <a href="#"><button class="button"> Tayan Hilir</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
