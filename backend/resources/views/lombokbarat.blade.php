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
        <a href="{{ route('NTB') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Lombok Barat</h2>
        <div class="grid">
            <a href="#"><button class="button">Batu Layar</button></a>
            <a href="#"><button class="button">Gerung</button></a>
            <a href="#"><button class="button">Gunungsari</button></a>
            <a href="#"><button class="button">Kediri</button></a>
            <a href="#"><button class="button">Kuripan</button></a>
            <a href="#"><button class="button">Labuapi</button></a>
            <a href="#"><button class="button">Lembar</button></a>
            <a href="#"><button class="button">Lingsar</button></a>
            <a href="#"><button class="button">Narmada</button></a>
            <a href="#"><button class="button">Sekotong</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
