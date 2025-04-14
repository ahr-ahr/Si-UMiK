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
        <h2>Kabupaten Bengkalis</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Bengkalis</button></a>
            <a href="#"><button class="button">Kecamatan Bantan</button></a>
            <a href="#"><button class="button">Kecamatan Mandau</button></a>
            <a href="#"><button class="button">Kecamatan Pinggir</button></a>
            <a href="#"><button class="button">Kecamatan Rupat</button></a>
            <a href="#"><button class="button">Kecamatan Rupat Utara</button></a>
            <a href="#"><button class="button">Kecamatan Siak Kecil</button></a>
            <a href="#"><button class="button">Kecamatan Tebing Tinggi</button></a>
            <a href="#"><button class="button">Kecamatan Mesuji Raya</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
