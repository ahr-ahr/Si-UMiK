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
        <a href="{{ route('papua') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Puncak</h2>
        <div class="grid">
            <a href="#"><button class="button"> Ilaga</button></a>
            <a href="#"><button class="button"> Beoga</button></a>
            <a href="#"><button class="button"> Mulia</button></a>
            <a href="#"><button class="button"> Gome</button></a>
            <a href="#"><button class="button"> Tembagapura</button></a>
            <a href="#"><button class="button"> Puncak Jaya</button></a>
            <a href="#"><button class="button"> Dogiyai</button></a>
            <a href="#"><button class="button"> Tigi</button></a>
            <a href="#"><button class="button"> Agadide</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
