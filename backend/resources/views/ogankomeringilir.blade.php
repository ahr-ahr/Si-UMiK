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
        <h2>Kabupaten Ogan Komering Ilir</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Kayu Agung</button></a>
            <a href="#"><button class="button">Kecamatan Mesuji</button></a>
            <a href="#"><button class="button">Kecamatan Lempuing</button></a>
            <a href="#"><button class="button">Kecamatan Lempuing Jaya</button></a>
            <a href="#"><button class="button">Kecamatan Pampangan</button></a>
            <a href="#"><button class="button">Kecamatan Tanjung Lubuk</button></a>
            <a href="#"><button class="button">Kecamatan Kota Kayu Agung</button></a>
            <a href="#"><button class="button">Kecamatan Sirah Pulau</button></a>
            <a href="#"><button class="button">Kecamatan Batu Alam</button></a>
            <a href="#"><button class="button">Kecamatan Buay Pemuka Bangsa Raja</button></a>
            <a href="#"><button class="button">Kecamatan Buay Pemuka Bistim</button></a>
            <a href="#"><button class="button">Kecamatan Pedamaran</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
