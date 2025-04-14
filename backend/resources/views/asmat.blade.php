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
        <h2>Kabupaten Asmat</h2>
        <div class="grid">
            <a href="#"><button class="button"> Agats</button></a>
            <a href="#"><button class="button"> Atsy</button></a>
            <a href="#"><button class="button"> Jayapura</button></a>
            <a href="#"><button class="button"> Jita</button></a>
            <a href="#"><button class="button"> Kaysabu</button></a>
            <a href="#"><button class="button"> Seram</button></a>
            <a href="#"><button class="button"> Sawa Erma</button></a>
            <a href="#"><button class="button"> Suator</button></a>
            <a href="#"><button class="button"> Yafi</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
