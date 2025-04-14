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
        <h2>Kabupaten Padang Pariaman</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan 2x11 Enam Lingkung</button></a>
            <a href="#"><button class="button">Kecamatan Batang Anai</button></a>
            <a href="#"><button class="button">Kecamatan Enam Lingkung</button></a>
            <a href="#"><button class="button">Kecamatan IV Koto Aur Malintang</button></a>
            <a href="#"><button class="button">Kecamatan Lubuk Alung</button></a>
            <a href="#"><button class="button">Kecamatan Nan Sabaris</button></a>
            <a href="#"><button class="button">Kecamatan Patamuan</button></a>
            <a href="#"><button class="button">Kecamatan Sintuk Toboh Gadang</button></a>
            <a href="#"><button class="button">Kecamatan Sungai Geringging</button></a>
            <a href="#"><button class="button">Kecamatan Sungai Limau</button></a>
            <a href="#"><button class="button">Kecamatan Ulakan Tapakis</button></a>
            <a href="#"><button class="button">Kecamatan V Koto Kampung Dalam</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
