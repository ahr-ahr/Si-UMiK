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
        <a href="{{ route('malut') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Halmahera Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Bacan</button></a>
            <a href="#"><button class="button"> Bacan Barat</button></a>
            <a href="#"><button class="button"> Bacan Selatan</button></a>
            <a href="#"><button class="button"> Bacan Timur</button></a>
            <a href="#"><button class="button"> Gane Barat</button></a>
            <a href="#"><button class="button"> Gane Timur</button></a>
            <a href="#"><button class="button"> Kayoa</button></a>
            <a href="#"><button class="button"> Kayoa Selatan</button></a>
            <a href="#"><button class="button"> Obi</button></a>
            <a href="#"><button class="button"> Obi Selatan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
