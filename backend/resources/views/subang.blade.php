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
        <h2>Kota Subang</h2>
        <div class="grid">
            <a href="#"><button class="button">Subang</button></a>
            <a href="#"><button class="button">Pusakanagara</button></a>
            <a href="#"><button class="button">Cibugel</button></a>
            <a href="#"><button class="button">Cikaum</button></a>
            <a href="#"><button class="button">Tanjungsiang</button></a>
            <a href="#"><button class="button">Cisalak</button></a>
            <a href="#"><button class="button">Pagaden</button></a>
            <a href="#"><button class="button">Blanakan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
