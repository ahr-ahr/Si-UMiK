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
        <a href="{{ route('jawatengah') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Pemalang</h2>
        <div class="grid">
            <a href="#"><button class="button">Pemalang</button></a>
            <a href="#"><button class="button">Petarukan</button></a>
            <a href="#"><button class="button">Pulosari</button></a>
            <a href="#"><button class="button">Ampelgading</button></a>
            <a href="#"><button class="button">Taman</button></a>
            <a href="#"><button class="button">Bantarbolang</button></a>
            <a href="#"><button class="button">Moga</button></a>
            <a href="#"><button class="button">Ulujami</button></a>
            <a href="#"><button class="button">Comal</button></a>
            <a href="#"><button class="button">Belik</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
