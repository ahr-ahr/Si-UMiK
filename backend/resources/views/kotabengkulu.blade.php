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
        <a href="{{ route('bengkulu') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Bengkulu</h2>
        <div class="grid">
            <a href="#"><button class="button">Ratu Agung</button></a>
            <a href="#"><button class="button">Gading Cempaka</button></a>
            <a href="#"><button class="button">Muara Bangka Hulu</button></a>
            <a href="#"><button class="button">Sumber Jaya</button></a>
            <a href="#"><button class="button">Selebar</button></a>
            <a href="#"><button class="button">Bengkulu Selatan</button></a>
            <a href="#"><button class="button">Kampung Melayu</button></a>
            <a href="#"><button class="button">Bengkulu Utara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
