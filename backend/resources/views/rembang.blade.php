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
        <a href="{{ route('jawatengah') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Rembang</h2>
        <div class="grid">
            <a href="#"><button class="button">Rembang Kota</button></a>
            <a href="#"><button class="button">Bulu</button></a>
            <a href="#"><button class="button">Kota Rembang</button></a>
            <a href="#"><button class="button">Sumber</button></a>
            <a href="#"><button class="button">Gunem</button></a>
            <a href="#"><button class="button">Pamotan</button></a>
            <a href="#"><button class="button">Sulang</button></a>
            <a href="#"><button class="button">Lasem</button></a>
            <a href="#"><button class="button">Sarang</button></a>
            <a href="#"><button class="button">Sedan</button></a>
            <a href="#"><button class="button">Sluke</button></a>
            <a href="#"><button class="button">Pakis Aji</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
