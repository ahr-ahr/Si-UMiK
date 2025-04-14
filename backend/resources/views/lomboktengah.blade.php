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
        <a href="{{ route('NTB') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Lombok Tengah</h2>
        <div class="grid">
            <a href="#"><button class="button">Batukliang</button></a>
            <a href="#"><button class="button">Batukliang Utara</button></a>
            <a href="#"><button class="button">Janapria</button></a>
            <a href="#"><button class="button">Jonggat</button></a>
            <a href="#"><button class="button">Kopang</button></a>
            <a href="#"><button class="button">Praya</button></a>
            <a href="#"><button class="button">Praya Barat</button></a>
            <a href="#"><button class="button">Praya Barat Daya</button></a>
            <a href="#"><button class="button">Praya Tengah</button></a>
            <a href="#"><button class="button">Praya Timur</button></a>
            <a href="#"><button class="button">Pujut</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
