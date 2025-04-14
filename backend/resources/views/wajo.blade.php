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
        <h2>Kabupaten Wajo</h2>
        <div class="grid">
            <a href="#"><button class="button"> Sengkang</button></a>
            <a href="#"><button class="button"> Tempe</button></a>
            <a href="#"><button class="button"> Tanasitolo</button></a>
            <a href="#"><button class="button"> Belawa</button></a>
            <a href="#"><button class="button"> Majauleng</button></a>
            <a href="#"><button class="button"> Pitumpanua</button></a>
            <a href="#"><button class="button"> Sabbangparu</button></a>
            <a href="#"><button class="button"> Keera</button></a>
            <a href="#"><button class="button"> Pammana</button></a>
            <a href="#"><button class="button"> Lohia</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
