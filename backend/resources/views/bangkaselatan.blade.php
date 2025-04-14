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
        <a href="{{ route('bangkabelitung') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Bangka Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button">Toboali</button></a>
            <a href="#"><button class="button">Lepar Pongok</button></a>
            <a href="#"><button class="button">Simpang Rimba</button></a>
            <a href="#"><button class="button">Air Gegas</button></a>
            <a href="#"><button class="button">Sungai Selan</button></a>
            <a href="#"><button class="button">Pulau Besar</button></a>
            <a href="#"><button class="button">Koba</button></a>
            <a href="#"><button class="button">Kantung</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
