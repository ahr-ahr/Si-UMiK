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
        <a href="{{ route('sumbar') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Sijunjung</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Sijunjung</button></a>
            <a href="#"><button class="button">Kecamatan IV Nagari</button></a>
            <a href="#"><button class="button">Kecamatan Koto VII</button></a>
            <a href="#"><button class="button">Kecamatan Kupitan</button></a>
            <a href="#"><button class="button">Kecamatan Lubuk Tarok</button></a>
            <a href="#"><button class="button">Kecamatan Sumpur Kudus</button></a>
            <a href="#"><button class="button">Kecamatan Tanjung Gadang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
