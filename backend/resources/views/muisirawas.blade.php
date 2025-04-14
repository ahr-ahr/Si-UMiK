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
        <h2>Kabupaten Musi Rawas</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Muara Beliti</button></a>
            <a href="#"><button class="button">Kecamatan Muara Kelingi</button></a>
            <a href="#"><button class="button">Kecamatan Jayaloka</button></a>
            <a href="#"><button class="button">Kecamatan BTS Ulu</button></a>
            <a href="#"><button class="button">Kecamatan Tugumulyo</button></a>
            <a href="#"><button class="button">Kecamatan Karang Jaya</button></a>
            <a href="#"><button class="button">Kecamatan Selangit</button></a>
            <a href="#"><button class="button">Kecamatan Sumber Harta</button></a>
            <a href="#"><button class="button">Kecamatan Rawas Ilir</button></a>
            <a href="#"><button class="button">Kecamatan Rawas Ulu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
