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
        <a href="{{ route('sumaterasel') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Lahat</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Kota Lahat</button></a>
            <a href="#"><button class="button">Kecamatan Merapi Barat</button></a>
            <a href="#"><button class="button">Kecamatan Merapi Timur</button></a>
            <a href="#"><button class="button">Kecamatan Pulau Pinang</button></a>
            <a href="#"><button class="button">Kecamatan Lahat Selatan</button></a>
            <a href="#"><button class="button">Kecamatan Lahat Utara</button></a>
            <a href="#"><button class="button">Kecamatan Pajar Bulan</button></a>
            <a href="#"><button class="button">Kecamatan Kikim Barat</button></a>
            <a href="#"><button class="button">Kecamatan Kikim Timur</button></a>
            <a href="#"><button class="button">Kecamatan Jarai</button></a>
            <a href="#"><button class="button">Kecamatan Tanjung Sakti Pumi</button></a>
            <a href="#"><button class="button">Kecamatan Tanjung Sakti Raya</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
