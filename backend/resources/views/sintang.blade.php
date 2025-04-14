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
        <h2>Kabupaten Sintang</h2>
        <div class="grid">
            <a href="#"><button class="button"> Sintang</button></a>
            <a href="#"><button class="button"> Dedai</button></a>
            <a href="#"><button class="button"> Ambalau</button></a>
            <a href="#"><button class="button"> Sepauk</button></a>
            <a href="#"><button class="button"> Kayan Hilir</button></a>
            <a href="#"><button class="button"> Kayan Hulu</button></a>
            <a href="#"><button class="button"> Serawai</button></a>
            <a href="#"><button class="button"> Binjai</button></a>
            <a href="#"><button class="button"> Sungai Tebelian</button></a>
            <a href="#"><button class="button"> Melawi</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
