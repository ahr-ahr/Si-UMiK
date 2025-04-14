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
        <h2>Kabupaten Mappi</h2>
        <div class="grid">
            <a href="#"><button class="button"> Agats</button></a>
            <a href="#"><button class="button"> Boven Digoel</button></a>
            <a href="#"><button class="button"> Edera</button></a>
            <a href="#"><button class="button"> Ilwayab</button></a>
            <a href="#"><button class="button"> Mappi</button></a>
            <a href="#"><button class="button"> Passue</button></a>
            <a href="#"><button class="button"> Pulau Tiga</button></a>
            <a href="#"><button class="button"> Senggo</button></a>
            <a href="#"><button class="button"> Wouma</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
