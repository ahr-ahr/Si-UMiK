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
        <a href="{{ route('papuabar') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Fakfak</h2>
        <div class="grid">
            <a href="#"><button class="button"> Fakfak</button></a>
            <a href="#"><button class="button"> Kramongmongga</button></a>
            <a href="#"><button class="button"> Parinusa</button></a>
            <a href="#"><button class="button"> Kamundan</button></a>
            <a href="#"><button class="button"> Fakfak Timur</button></a>
            <a href="#"><button class="button"> Fakfak Barat</button></a>
            <a href="#"><button class="button"> Karas</button></a>
            <a href="#"><button class="button"> Kokas</button></a>
            <a href="#"><button class="button"> Agimuga</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
