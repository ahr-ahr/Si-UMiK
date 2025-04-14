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
        <h2>Kabupaten Ogan Komering Ulu Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Muaradua</button></a>
            <a href="#"><button class="button">Kecamatan Buay Rawan</button></a>
            <a href="#"><button class="button">Kecamatan Buay Sandang Aji</button></a>
            <a href="#"><button class="button">Kecamatan Kisam Tinggi</button></a>
            <a href="#"><button class="button">Kecamatan Lengkiti</button></a>
            <a href="#"><button class="button">Kecamatan Semidang Aji</button></a>
            <a href="#"><button class="button">Kecamatan Sanga Desa</button></a>
            <a href="#"><button class="button">Kecamatan Runjung Agung</button></a>
            <a href="#"><button class="button">Kecamatan Tiga Dihaji</button></a>
            <a href="#"><button class="button">Kecamatan Paku</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
