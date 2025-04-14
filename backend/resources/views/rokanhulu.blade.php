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
        <h2>Kabupaten Rokan Hulu</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Rambah</button></a>
            <a href="#"><button class="button">Kecamatan Rambah Samo</button></a>
            <a href="#"><button class="button">Kecamatan Ujung Batu</button></a>
            <a href="#"><button class="button">Kecamatan Tambusai</button></a>
            <a href="#"><button class="button">Kecamatan Tambusai Utara</button></a>
            <a href="#"><button class="button">Kecamatan Kepenuhan</button></a>
            <a href="#"><button class="button">Kecamatan Kepenuhan Hulu</button></a>
            <a href="#"><button class="button">Kecamatan Kabun</button></a>
            <a href="#"><button class="button">Kecamatan Tandun</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
