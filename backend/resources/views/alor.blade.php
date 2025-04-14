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
        <h2>Kabupaten Alor</h2>
        <div class="grid">
            <a href="#"><button class="button">Alor Barat Daya</button></a>
            <a href="#"><button class="button">Alor Barat</button></a>
            <a href="#"><button class="button">Alor Tengah Utara</button></a>
            <a href="#"><button class="button">Alor Timur</button></a>
            <a href="#"><button class="button">Alor Timur Laut</button></a>
            <a href="#"><button class="button">Kabola</button></a>
            <a href="#"><button class="button">Lembur</button></a>
            <a href="#"><button class="button">Mataru</button></a>
            <a href="#"><button class="button">Pantar</button></a>
            <a href="#"><button class="button">Pantar Barat</button></a>
            <a href="#"><button class="button">Pantar Timur</button></a>
            <a href="#"><button class="button">Solor Barat</button></a>
            <a href="#"><button class="button">Solor Timur</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
