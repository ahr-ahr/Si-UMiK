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
        <a href="{{ route('sulteng') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Sigi</h2>
        <div class="grid">
            <a href="#"><button class="button"> Sigi Biromaru</button></a>
            <a href="#"><button class="button"> Dolo</button></a>
            <a href="#"><button class="button"> Dolo Barat</button></a>
            <a href="#"><button class="button"> Marawola</button></a>
            <a href="#"><button class="button"> Gumbasa</button></a>
            <a href="#"><button class="button"> Tanambulava</button></a>
            <a href="#"><button class="button"> Palolo</button></a>
            <a href="#"><button class="button"> Kulawi</button></a>
            <a href="#"><button class="button"> Kulawi Selatan</button></a>
            <a href="#"><button class="button"> Pipikoro</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
