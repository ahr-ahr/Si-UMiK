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
        <h2>Kabupaten Barito Timur</h2>
        <div class="grid">
            <a href="#"><button class="button"> Tamiang Layang</button></a>
            <a href="#"><button class="button"> Dusun Timur</button></a>
            <a href="#"><button class="button"> Raren Batuah</button></a>
            <a href="#"><button class="button"> Benua Lima</button></a>
            <a href="#"><button class="button"> Paku</button></a>
            <a href="#"><button class="button"> Patangkep Tutui</button></a>
            <a href="#"><button class="button"> Banua Runtu</button></a>
            <a href="#"><button class="button"> Awang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
