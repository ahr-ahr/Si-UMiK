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
        <a href="{{ route('sultra') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Konawe Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Andoolo</button></a>
            <a href="#"><button class="button"> Andoolo Barat</button></a>
            <a href="#"><button class="button"> Konda</button></a>
            <a href="#"><button class="button"> Laeya</button></a>
            <a href="#"><button class="button"> Mowewe</button></a>
            <a href="#"><button class="button"> Basala</button></a>
            <a href="#"><button class="button"> Buke</button></a>
            <a href="#"><button class="button"> Tinanggea</button></a>
            <a href="#"><button class="button"> Landono</button></a>
            <a href="#"><button class="button"> Kolono</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
