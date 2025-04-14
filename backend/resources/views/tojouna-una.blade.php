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
        <h2>Kabupaten Tojo Una-Una</h2>
        <div class="grid">
            <a href="#"><button class="button"> Tojo</button></a>
            <a href="#"><button class="button"> Una-Una</button></a>
            <a href="#"><button class="button"> Ulubongka</button></a>
            <a href="#"><button class="button"> Ampana Kota</button></a>
            <a href="#"><button class="button"> Ampana Tete</button></a>
            <a href="#"><button class="button"> Ratolindo</button></a>
            <a href="#"><button class="button"> Tojo Barat</button></a>
            <a href="#"><button class="button"> Kabalutan</button></a>
            <a href="#"><button class="button"> Salubanga</button></a>
            <a href="#"><button class="button"> Melepah</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
