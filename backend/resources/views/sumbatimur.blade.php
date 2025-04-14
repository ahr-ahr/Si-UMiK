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
        <a href="{{ route('NTT') }}"><div class="back-button">&larr;</div></a> 
        <h2>Kabupaten Sumba Timur</h2>
        <div class="grid">
            <a href="#"><button class="button"> Kambera</button></a>
            <a href="#"><button class="button"> Pahunga Lodu</button></a>
            <a href="#"><button class="button"> Umalulu</button></a>
            <a href="#"><button class="button"> Pandawai</button></a>
            <a href="#"><button class="button"> Nggaha Oriangu</button></a>
            <a href="#"><button class="button"> Lewa</button></a>
            <a href="#"><button class="button"> Kahaungu Eti</button></a>
            <a href="#"><button class="button"> Pinu Pahar</button></a>
            <a href="#"><button class="button"> Wulla Waijelu</button></a>
            <a href="#"><button class="button"> Inbu Rara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
