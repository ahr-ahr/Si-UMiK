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
        <h2>Kota Kendari</h2>
        <div class="grid">
            <a href="#"><button class="button"> Kendari Barat</button></a>
            <a href="#"><button class="button"> Kendari Timur</button></a>
            <a href="#"><button class="button"> Poasia</button></a>
            <a href="#"><button class="button"> Abeli</button></a>
            <a href="#"><button class="button"> Kendari Selatan</button></a>
            <a href="#"><button class="button"> Kendari Utara</button></a>
            <a href="#"><button class="button"> Mandonga</button></a>
            <a href="#"><button class="button"> Baruga</button></a>
            <a href="#"><button class="button"> Kambu</button></a>
            <a href="#"><button class="button"> Puuwatu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
