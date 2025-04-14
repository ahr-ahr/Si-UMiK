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
        <a href="{{ route('DKI') }}"><div class="back-button">&larr;</div></a>
        <h2>Jakarta Barat</h2>
        <div class="grid">
            <a href="#"><button class="button">Kebon Jeruk</button></a>
            <a href="#"><button class="button">Grogol Petamburan</button></a>
            <a href="#"><button class="button">Taman Sari</button></a>
            <a href="#"><button class="button">Kali Deres</button></a>
            <a href="#"><button class="button">Cengkareng</button></a>
            <a href="#"><button class="button">Palmerah</button></a>
            <a href="#"><button class="button">Kembangan</button></a>
            <a href="#"><button class="button">Tangki</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
