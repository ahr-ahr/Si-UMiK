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
        <h2>Kota Pekalongan</h2>
        <div class="grid">
            <a href="#"><button class="button">Pekalongan Barat</button></a>
            <a href="#"><button class="button">Pekalongan Timur</button></a>
            <a href="#"><button class="button">Pekalongan Selatan</button></a>
            <a href="#"><button class="button">Pekalongan Utara</button></a>
            <a href="#"><button class="button">Kandang Panjang</button></a>
            <a href="#"><button class="button">Pulo Gotri</button></a>
            <a href="#"><button class="button">Lawang Semboro</button></a>
            <a href="#"><button class="button">Kraton</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
