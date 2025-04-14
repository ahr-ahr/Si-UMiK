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
        <a href="{{ route('jambi') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Tanjung Jabung Timur</h2>
        <div class="grid">
            <a href="#"><button class="button">Mersam</button></a>
            <a href="#"><button class="button">Sungai Gelam</button></a>
            <a href="#"><button class="button">Muara Sabak</button></a>
            <a href="#"><button class="button">Dendang</button></a>
            <a href="#"><button class="button">Geragai</button></a>
            <a href="#"><button class="button">Rantau Rasau</button></a>
            <a href="#"><button class="button">Berbak</button></a>
            <a href="#"><button class="button">Sabak Timur</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
