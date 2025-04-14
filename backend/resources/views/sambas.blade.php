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
        <h2>Kabupaten Sambas</h2>
        <div class="grid">
            <a href="#"><button class="button"> Sambas</button></a>
            <a href="#"><button class="button"> Sajad</button></a>
            <a href="#"><button class="button"> Sejangkung</button></a>
            <a href="#"><button class="button"> Jawai</button></a>
            <a href="#"><button class="button"> Jawai Selatan</button></a>
            <a href="#"><button class="button"> Pemangkat</button></a>
            <a href="#"><button class="button"> Salatiga</button></a>
            <a href="#"><button class="button"> Tebas</button></a>
            <a href="#"><button class="button"> Tangaran</button></a>
            <a href="#"><button class="button"> Sebawi</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
