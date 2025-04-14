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
        <a href="{{ route('maluku') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Buru</h2>
        <div class="grid">
            <a href="#"><button class="button"> Namlea</button></a>
            <a href="#"><button class="button"> Waeapo</button></a>
            <a href="#"><button class="button"> Teluk Kaiely</button></a>
            <a href="#"><button class="button"> Leksula</button></a>
            <a href="#"><button class="button"> Fena</button></a>
            <a href="#"><button class="button"> Batabual</button></a>
            <a href="#"><button class="button"> Buru Selatan</button></a>
            <a href="#"><button class="button"> Buru Tengah</button></a>
            <a href="#"><button class="button"> Buru Utara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
