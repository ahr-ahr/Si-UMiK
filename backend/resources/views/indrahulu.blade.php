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
        <h2>Kabupaten Indragiri Hulu</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Rengat</button></a>
            <a href="#"><button class="button">Kecamatan Rengat Barat</button></a>
            <a href="#"><button class="button">Kecamatan Seberida</button></a>
            <a href="#"><button class="button">Kecamatan Batang Cenaku</button></a>
            <a href="#"><button class="button">Kecamatan Batang Gansal</button></a>
            <a href="#"><button class="button">Kecamatan Lirik</button></a>
            <a href="#"><button class="button">Kecamatan Pasir Penyu</button></a>
            <a href="#"><button class="button">Kecamatan Peranap</button></a>
            <a href="#"><button class="button">Kecamatan Kelayang</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
