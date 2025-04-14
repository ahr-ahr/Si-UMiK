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
        <h2>Kabupaten Mukomuko</h2>
        <div class="grid">
            <a href="#"><button class="button">Air Manjuto</button></a>
            <a href="#"><button class="button">Air Rami</button></a>
            <a href="#"><button class="button">Penarik</button></a>
            <a href="#"><button class="button">Lubuk Pinang</button></a>
            <a href="#"><button class="button">XIV Koto</button></a>
            <a href="#"><button class="button">Muko-Muko</button></a>
            <a href="#"><button class="button">Sungai Rumbai</button></a>
            <a href="#"><button class="button">Ipuh</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
