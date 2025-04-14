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
        <h2>Kabupaten Indramayu</h2>
        <div class="grid">
            <a href="#"><button class="button">Indramayu</button></a>
            <a href="#"><button class="button">Kroya</button></a>
            <a href="#"><button class="button">Losarang</button></a>
            <a href="#"><button class="button">Cikedung</button></a>
            <a href="#"><button class="button">Anjatan</button></a>
            <a href="#"><button class="button">Sumber</button></a>
            <a href="#"><button class="button">Sindang</button></a>
            <a href="#"><button class="button">Balongan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
