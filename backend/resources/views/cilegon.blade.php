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
        <a href="{{ route('banten') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Cilegon</h2>
        <div class="grid">
            <a href="#"><button class="button">Cilegon</button></a>
            <a href="#"><button class="button">Grogol</button></a>
            <a href="#"><button class="button">Jombang</button></a>
            <a href="#"><button class="button">Pulomerak</button></a>
            <a href="#"><button class="button">Cibeber</button></a>
            <a href="#"><button class="button">Rangkasbitung</button></a>
            <a href="#"><button class="button">Cinangka</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
