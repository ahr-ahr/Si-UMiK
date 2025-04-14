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
        <a href="{{ route('bali') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Badung</h2>
        <div class="grid">
            <a href="#"><button class="button">Kuta</button></a>
            <a href="#"><button class="button">Seminyak</button></a>
            <a href="#"><button class="button">Canggu</button></a>
            <a href="#"><button class="button">Jimbaran</button></a>
            <a href="#"><button class="button">Nusa Dua</button></a>
            <a href="#"><button class="button">Tuban</button></a>
            <a href="#"><button class="button">Pecatu</button></a>
            <a href="#"><button class="button">Abiansemal</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
