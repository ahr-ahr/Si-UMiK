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
        <a href="{{ route('sumut') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Pakpak Bharat</h2>
        <div class="grid">
            <a href="#"><button class="button">Salak</button></a>
            <a href="#"><button class="button">Simpang Empat</button></a>
            <a href="#"><button class="button">Kerajaan</button></a>
            <a href="#"><button class="button">Mekar Sari</button></a>
            <a href="#"><button class="button">Maranata</button></a>
            <a href="#"><button class="button">Sitinjo</button></a>
            <a href="#"><button class="button">Perdagang</button></a>
            <a href="#"><button class="button">Tiganderket</button></a>
            <a href="#"><button class="button">Pakkat</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
