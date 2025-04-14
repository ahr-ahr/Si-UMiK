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
        <a href="{{ route('sulasel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Jeneponto</h2>
        <div class="grid">
            <a href="#"><button class="button"> Binamu</button></a>
            <a href="#"><button class="button"> Tamalatea</button></a>
            <a href="#"><button class="button"> Rumbia</button></a>
            <a href="#"><button class="button"> Arungkeke</button></a>
            <a href="#"><button class="button"> Bontoramba</button></a>
            <a href="#"><button class="button"> Turatea</button></a>
            <a href="#"><button class="button"> Ujung Bulu</button></a>
            <a href="#"><button class="button"> Bontolempangan</button></a>
            <a href="#"><button class="button"> Kepulauan Sangkala</button></a>
            <a href="#"><button class="button"> Bangkala</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
