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
        <a href="{{ route('kalteng') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Katingan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Katingan Hilir</button></a>
            <a href="#"><button class="button"> Katingan Tengah</button></a>
            <a href="#"><button class="button"> Katingan Hulu</button></a>
            <a href="#"><button class="button"> Marikit</button></a>
            <a href="#"><button class="button"> Pulau Malan</button></a>
            <a href="#"><button class="button"> Petak Malai</button></a>
            <a href="#"><button class="button"> Sanaman Mantikei</button></a>
            <a href="#"><button class="button"> Tumbang Samba</button></a>
            <a href="#"><button class="button"> Tumbang Nusa</button></a>
            <a href="#"><button class="button"> Tumbang Kule</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
