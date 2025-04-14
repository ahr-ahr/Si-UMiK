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
        <a href="{{ route('sumut') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Pematangsiantar</h2>
        <div class="grid">
            <a href="#"><button class="button">Siantar Marihat</button></a>
            <a href="#"><button class="button">Siantar Barat</button></a>
            <a href="#"><button class="button">Siantar Utara</button></a>
            <a href="#"><button class="button">Siantar Selatan</button></a>
            <a href="#"><button class="button">Siantar Timur</button></a>
            <a href="#"><button class="button">Siantar Sitalasari</button></a>
            <a href="#"><button class="button">Siantar Martoba</button></a>
            <a href="#"><button class="button">Siantar Marimbun</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
