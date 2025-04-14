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
        <h2>Kabupaten Lebong</h2>
        <div class="grid">
            <a href="#"><button class="button">Lebong</button></a>
            <a href="#"><button class="button">Lebong Atas</button></a>
            <a href="#"><button class="button">Pinang Belapis</button></a>
            <a href="#"><button class="button">Sungai Pinang</button></a>
            <a href="#"><button class="button">Uram Jaya</button></a>
            <a href="#"><button class="button">Amen</button></a>
            <a href="#"><button class="button">Muara Aman</button></a>
            <a href="#"><button class="button">Rimbo Pengadang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
