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
        <h2>Kabupaten Lima Puluh Kota</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Harau</button></a>
            <a href="#"><button class="button">Kecamatan Payakumbuh</button></a>
            <a href="#"><button class="button">Kecamatan Lareh Sago Halaban</button></a>
            <a href="#"><button class="button">Kecamatan Situjuah Limo Nagari</button></a>
            <a href="#"><button class="button">Kecamatan Luak</button></a>
            <a href="#"><button class="button">Kecamatan Guguak</button></a>
            <a href="#"><button class="button">Kecamatan Bukik Barisan</button></a>
            <a href="#"><button class="button">Kecamatan Kapur IX</button></a>
            <a href="#"><button class="button">Kecamatan Mungka</button></a>
            <a href="#"><button class="button">Kecamatan Pangkalan Koto Baru</button></a>
            <a href="#"><button class="button">Kecamatan Suliki</button></a>
            <a href="#"><button class="button">Kecamatan Gunuang Omeh</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
