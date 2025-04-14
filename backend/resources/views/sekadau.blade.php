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
        <h2>Kabupaten Sekadau</h2>
        <div class="grid">
            <a href="#"><button class="button"> Sekadau Hilir</button></a>
            <a href="#"><button class="button"> Sekadau Hulu</button></a>
            <a href="#"><button class="button"> Belitang Hilir</button></a>
            <a href="#"><button class="button"> Belitang Hulu</button></a>
            <a href="#"><button class="button"> Nanga Mahap</button></a>
            <a href="#"><button class="button"> Nanga Taman</button></a>
            <a href="#"><button class="button"> Sungai Tebelian</button></a>
            <a href="#"><button class="button"> Entikong</button></a>
            <a href="#"><button class="button"> Siding</button></a>
            <a href="#"><button class="button"> Munggu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
