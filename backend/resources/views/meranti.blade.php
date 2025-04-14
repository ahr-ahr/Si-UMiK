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
        <h2>Kabupaten Kepulauan Meranti</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Tebing Tinggi</button></a>
            <a href="#"><button class="button">Kecamatan Tebing Tinggi Barat</button></a>
            <a href="#"><button class="button">Kecamatan Tebing Tinggi Timur</button></a>
            <a href="#"><button class="button">Kecamatan Rangsang</button></a>
            <a href="#"><button class="button">Kecamatan Rangsang Barat</button></a>
            <a href="#"><button class="button">Kecamatan Rangsang Pesisir</button></a>
            <a href="#"><button class="button">Kecamatan Merbau</button></a>
            <a href="#"><button class="button">Kecamatan Pulau Merbau</button></a>
            <a href="#"><button class="button">Kecamatan Tasik Putri Puyu</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
