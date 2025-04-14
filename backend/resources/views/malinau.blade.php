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
        <a href="{{ route('kaltara') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Malinau</h2>
        <div class="grid">
            <a href="#"><button class="button"> Malinau Kota</button></a>
            <a href="#"><button class="button"> Malinau Selatan</button></a>
            <a href="#"><button class="button"> Malinau Utara</button></a>
            <a href="#"><button class="button"> Mentarang</button></a>
            <a href="#"><button class="button"> Pujungan</button></a>
            <a href="#"><button class="button"> Malinau Timur</button></a>
            <a href="#"><button class="button"> Malinau Barat</button></a>
            <a href="#"><button class="button"> Sei Kelayang</button></a>
            <a href="#"><button class="button"> Long Kali</button></a>
            <a href="#"><button class="button"> Long Pelay</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
