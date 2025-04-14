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
        <a href="{{ route('yogya') }}"><div class="back-button">&larr;</div></a>
        <h2>Kecamatan di Gunung Kidul</h2>
        <div class="grid">
            <a href="#"><button class="button">Wonosari</button></a>
            <a href="#"><button class="button">Karangmojo</button></a>
            <a href="#"><button class="button">Semanu</button></a>
            <a href="#"><button class="button">Ponjong</button></a>
            <a href="#"><button class="button">Nglipar</button></a>
            <a href="#"><button class="button">Gedangsari</button></a>
            <a href="#"><button class="button">Tepus</button></a>
            <a href="#"><button class="button">Saptosari</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
