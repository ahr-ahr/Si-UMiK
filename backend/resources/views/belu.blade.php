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
        <h2>Kabupaten Belu</h2>
        <div class="grid">
            <a href="#"><button class="button">Atambua</button></a>
            <a href="#"><button class="button">Atambua Barat</button></a>
            <a href="#"><button class="button">Tasifeto Barat</button></a>
            <a href="#"><button class="button">Tasifeto Timur</button></a>
            <a href="#"><button class="button">Raihat</button></a>
            <a href="#"><button class="button">Lamaknen</button></a>
            <a href="#"><button class="button">Lamaknen Selatan</button></a>
            <a href="#"><button class="button">Kakuluk Mesak</button></a>
            <a href="#"><button class="button">Nunkolo</button></a>
            <a href="#"><button class="button">Weliman</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
