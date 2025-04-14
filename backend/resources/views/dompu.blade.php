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
        <a href="{{ route('NTB') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Dompu</h2>
        <div class="grid">
            <a href="#"><button class="button">Dompu</button></a>
            <a href="#"><button class="button">Hu'u</button></a>
            <a href="#"><button class="button">Kempo</button></a>
            <a href="#"><button class="button">Kilo</button></a>
            <a href="#"><button class="button">Manggelewa</button></a>
            <a href="#"><button class="button">Pajo</button></a>
            <a href="#"><button class="button">Pekat</button></a>
            <a href="#"><button class="button">Woja</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
