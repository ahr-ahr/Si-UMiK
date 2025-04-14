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
        <a href="{{ route('bengkulu') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Bengkulu Utara</h2>
        <div class="grid">
            <a href="#"><button class="button">Arga Makmur</button></a>
            <a href="#"><button class="button">Air Besi</button></a>
            <a href="#"><button class="button">Taba Penanjung</button></a>
            <a href="#"><button class="button">Padang Jaya</button></a>
            <a href="#"><button class="button">Lung Lemo</button></a>
            <a href="#"><button class="button">Pondok Kubang</button></a>
            <a href="#"><button class="button">Muara Pinang</button></a>
            <a href="#"><button class="button">Hulu Palik</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
