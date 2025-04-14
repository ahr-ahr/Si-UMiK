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
        <a href="{{ route('sulasel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Kepulauan Selayar</h2>
        <div class="grid">
            <a href="#"><button class="button"> Benteng</button></a>
            <a href="#"><button class="button"> Bontoharu</button></a>
            <a href="#"><button class="button"> Bontomanai</button></a>
            <a href="#"><button class="button"> Pasilambena</button></a>
            <a href="#"><button class="button"> Takabonerate</button></a>
            <a href="#"><button class="button"> Pasimasunggu</button></a>
            <a href="#"><button class="button"> Pasimasunggu Timur</button></a>
            <a href="#"><button class="button"> Tanete</button></a>
            <a href="#"><button class="button"> Selayar Selatan</button></a>
            <a href="#"><button class="button"> Labessi</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
