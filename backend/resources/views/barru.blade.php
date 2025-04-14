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
        <h2>Kabupaten Barru</h2>
        <div class="grid">
            <a href="#"><button class="button"> Barru</button></a>
            <a href="#"><button class="button"> Soppeng Riaja</button></a>
            <a href="#"><button class="button"> Tanete Riaja</button></a>
            <a href="#"><button class="button"> Balusu</button></a>
            <a href="#"><button class="button"> Pujananting</button></a>
            <a href="#"><button class="button"> Mallusetasi</button></a>
            <a href="#"><button class="button"> Simbuang</button></a>
            <a href="#"><button class="button"> Tanete</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
