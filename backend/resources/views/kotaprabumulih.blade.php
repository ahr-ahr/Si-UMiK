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
        <h2>Kota Prabumulih</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Prabumulih Barat</button></a>
            <a href="#"><button class="button">Kecamatan Prabumulih Timur</button></a>
            <a href="#"><button class="button">Kecamatan Rambang Kapak Tengah</button></a>
            <a href="#"><button class="button">Kecamatan Cambai</button></a>
            <a href="#"><button class="button">Kecamatan Bukit Kecil</button></a>
            <a href="#"><button class="button">Kecamatan Talang Ubi</button></a>
            <a href="#"><button class="button">Kecamatan Muara Dua</button></a>
            <a href="#"><button class="button">Kecamatan Prabumulih Selatan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
