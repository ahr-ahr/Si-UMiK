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
        <h2>Kabupaten Tapanuli Tengah</h2>
        <div class="grid">
            <a href="#"><button class="button">Barus</button></a>
            <a href="#"><button class="button">Sibolga</button></a>
            <a href="#"><button class="button">Pinangsori</button></a>
            <a href="#"><button class="button">Manduamas</button></a>
            <a href="#"><button class="button">Tapian Nauli</button></a>
            <a href="#"><button class="button">Sorkam</button></a>
            <a href="#"><button class="button">Sorkam Barat</button></a>
            <a href="#"><button class="button">Kolang</button></a>
            <a href="#"><button class="button">Barus Utara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
