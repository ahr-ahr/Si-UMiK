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
        <h2>Kabupaten Penukal Abab Lematang Ilir</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Talang Ubi</button></a>
            <a href="#"><button class="button">Kecamatan Penukal</button></a>
            <a href="#"><button class="button">Kecamatan Muara Enim</button></a>
            <a href="#"><button class="button">Kecamatan Abab</button></a>
            <a href="#"><button class="button">Kecamatan Lematang Ilir</button></a>
            <a href="#"><button class="button">Kecamatan Tanah Abang</button></a>
            <a href="#"><button class="button">Kecamatan Muaradua</button></a>
            <a href="#"><button class="button">Kecamatan Pematang Panggang</button></a>
            <a href="#"><button class="button">Kecamatan Sindang Aji</button></a>
            <a href="#"><button class="button">Kecamatan Sumber Agung</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
