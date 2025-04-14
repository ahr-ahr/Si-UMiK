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
        <h2>Kabupaten Rejang Lebong</h2>
        <div class="grid">
            <a href="#"><button class="button">Curup</button></a>
            <a href="#"><button class="button">Selupu Rejang</button></a>
            <a href="#"><button class="button">Sindang Dataran</button></a>
            <a href="#"><button class="button">Lebong Selatan</button></a>
            <a href="#"><button class="button">Lebong Tengah</button></a>
            <a href="#"><button class="button">Lebong Utara</button></a>
            <a href="#"><button class="button">Bengkulu Tengah</button></a>
            <a href="#"><button class="button">Sudirman</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
