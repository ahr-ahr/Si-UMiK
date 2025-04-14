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
        <a href="{{ route('lampung') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Tulang Bawang</h2>
        <div class="grid">
            <a href="#"><button class="button">Menggala</button></a>
            <a href="#"><button class="button">Banjar Agung</button></a>
            <a href="#"><button class="button">Dente Teladas</button></a>
            <a href="#"><button class="button">Rawa Jitu Utara</button></a>
            <a href="#"><button class="button">Rawa Jitu Selatan</button></a>
            <a href="#"><button class="button">Tulang Bawang Tengah</button></a>
            <a href="#"><button class="button">Tulang Bawang Barat</button></a>
            <a href="#"><button class="button">Penawar Tama</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
