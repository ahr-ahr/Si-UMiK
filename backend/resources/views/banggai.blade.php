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
        <h2>Kabupaten Banggai</h2>
        <div class="grid">
            <a href="#"><button class="button"> Luwuk</button></a>
            <a href="#"><button class="button"> Luwuk Utara</button></a>
            <a href="#"><button class="button"> Luwuk Timur</button></a>
            <a href="#"><button class="button"> Luwuk Selatan</button></a>
            <a href="#"><button class="button"> Toili</button></a>
            <a href="#"><button class="button"> Toili Barat</button></a>
            <a href="#"><button class="button"> Moilong</button></a>
            <a href="#"><button class="button"> Batui</button></a>
            <a href="#"><button class="button"> Batui Selatan</button></a>
            <a href="#"><button class="button"> Bunta</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
