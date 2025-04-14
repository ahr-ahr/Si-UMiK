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
        <a href="{{ route('kalsel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Banjar</h2>
        <div class="grid">
            <a href="#"><button class="button"> Martapura</button></a>
            <a href="#"><button class="button"> Martapura Kota</button></a>
            <a href="#"><button class="button"> Simpang Empat</button></a>
            <a href="#"><button class="button"> Karang Intan</button></a>
            <a href="#"><button class="button"> Mataraman</button></a>
            <a href="#"><button class="button"> Astambul</button></a>
            <a href="#"><button class="button"> Candi Laras Selatan</button></a>
            <a href="#"><button class="button"> Candi Laras Utara</button></a>
            <a href="#"><button class="button"> Pengaron</button></a>
            <a href="#"><button class="button"> Paramasan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
