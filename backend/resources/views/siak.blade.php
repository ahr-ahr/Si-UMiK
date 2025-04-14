<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Daerah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/lokasi.css') }}">
</head>
<body>

    <div class="container">
        <a href="{{ route('lokasiriau') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Siak</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Siak</button></a>
            <a href="#"><button class="button">Kecamatan Sungai Apit</button></a>
            <a href="#"><button class="button">Kecamatan Bungaraya</button></a>
            <a href="#"><button class="button">Kecamatan Dayun</button></a>
            <a href="#"><button class="button">Kecamatan Kandis</button></a>
            <a href="#"><button class="button">Kecamatan Minas</button></a>
            <a href="#"><button class="button">Kecamatan Tualang</button></a>
            <a href="#"><button class="button">Kecamatan Sabak Auh</button></a>
            <a href="#"><button class="button">Kecamatan Pusako</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
