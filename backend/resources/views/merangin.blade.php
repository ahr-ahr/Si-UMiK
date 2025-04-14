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
        <h2>Kabupaten Merangin</h2>
        <div class="grid">
            <a href="#"><button class="button">Bangko</button></a>
            <a href="#"><button class="button">Tabir</button></a>
            <a href="#"><button class="button">Tabir Ilir</button></a>
            <a href="#"><button class="button">Tabir Lintas</button></a>
            <a href="#"><button class="button">Renah Pembarap</button></a>
            <a href="#"><button class="button">Pangkalan Jambu</button></a>
            <a href="#"><button class="button">Nalo Tantan</button></a>
            <a href="#"><button class="button">Koto Tengah</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
