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
        <a href="{{ route('kalsel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Hulu Sungai Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Kandangan</button></a>
            <a href="#"><button class="button"> Simpur</button></a>
            <a href="#"><button class="button"> Angkinang</button></a>
            <a href="#"><button class="button"> Loksado</button></a>
            <a href="#"><button class="button"> Padang Batung</button></a>
            <a href="#"><button class="button"> Telaga Langsat</button></a>
            <a href="#"><button class="button"> Daha Selatan</button></a>
            <a href="#"><button class="button"> Daha Utara</button></a>
            <a href="#"><button class="button"> Bungur</button></a>
            <a href="#"><button class="button"> Hantakan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
