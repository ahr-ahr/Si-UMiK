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
        <a href="{{ route('NTT') }}"><div class="back-button">&larr;</div></a> 
        <h2>Kabupaten Rote Ndao</h2>
        <div class="grid">
            <a href="#"><button class="button"> Rote Barat Daya</button></a>
            <a href="#"><button class="button"> Rote Barat Laut</button></a>
            <a href="#"><button class="button"> Rote Tengah</button></a>
            <a href="#"><button class="button"> Rote Timur</button></a>
            <a href="#"><button class="button"> Rote Timur Laut</button></a>
            <a href="#"><button class="button"> Rote Selatan</button></a>
            <a href="#"><button class="button"> Lobalain</button></a>
            <a href="#"><button class="button"> Landu Leko</button></a>
            <a href="#"><button class="button"> Oelamasi</button></a>
            <a href="#"><button class="button"> Pantai Baru</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
