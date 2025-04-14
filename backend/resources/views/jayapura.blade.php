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
        <h2>Kabupaten Jayapura</h2>
        <div class="grid">
            <a href="#"><button class="button"> Sentani</button></a>
            <a href="#"><button class="button"> Sentani Barat</button></a>
            <a href="#"><button class="button"> Sentani Timur</button></a>
            <a href="#"><button class="button"> Waibu</button></a>
            <a href="#"><button class="button"> Subur</button></a>
            <a href="#"><button class="button"> Depapre</button></a>
            <a href="#"><button class="button"> Nimboran</button></a>
            <a href="#"><button class="button"> Kemtuk</button></a>
            <a href="#"><button class="button"> Kemtuk Gresi</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
