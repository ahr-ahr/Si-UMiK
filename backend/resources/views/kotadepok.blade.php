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
        <a href="{{ route('jawabarat') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Depok</h2>
        <div class="grid">
            <a href="#"><button class="button">Beji</button></a>
            <a href="#"><button class="button">Cilodong</button></a>
            <a href="#"><button class="button">Cipayung</button></a>
            <a href="#"><button class="button">Limo</button></a>
            <a href="#"><button class="button">Marga Setia</button></a>
            <a href="#"><button class="button">Pancoran Mas</button></a>
            <a href="#"><button class="button">Sawangan</button></a>
            <a href="#"><button class="button">Tapos</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
