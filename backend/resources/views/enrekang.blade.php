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
        <h2>Kabupaten Enrekang</h2>
        <div class="grid">
            <a href="#"><button class="button"> Enrekang</button></a>
            <a href="#"><button class="button"> Baraka</button></a>
            <a href="#"><button class="button"> Cendana</button></a>
            <a href="#"><button class="button"> Maiwa</button></a>
            <a href="#"><button class="button"> Anggeraja</button></a>
            <a href="#"><button class="button"> Alla</button></a>
            <a href="#"><button class="button"> Bungin</button></a>
            <a href="#"><button class="button"> Muara</button></a>
            <a href="#"><button class="button"> Batumonga</button></a>
            <a href="#"><button class="button"> Curio</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
