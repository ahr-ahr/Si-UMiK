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
        <h2>Kota Bandung</h2>
        <div class="grid">
            <a href="#"><button class="button">Andir</button></a>
            <a href="#"><button class="button">Arcamanik</button></a>
            <a href="#"><button class="button">Astanaanyar</button></a>
            <a href="#"><button class="button">Babakan Ciparay</button></a>
            <a href="#"><button class="button">Bandung Kulon</button></a>
            <a href="#"><button class="button">Bandung Wetan</button></a>
            <a href="#"><button class="button">Bojonegoro</button></a>
            <a href="#"><button class="button">Cibeunying Kaler</button></a>
            <a href="#"><button class="button">Cibeunying Kidul</button></a>
            <a href="#"><button class="button">Cimahi</button></a>
            <a href="#"><button class="button">Cidadap</button></a>
            <a href="#"><button class="button">Coblong</button></a>
            <a href="#"><button class="button">Kiaracondong</button></a>
            <a href="#"><button class="button">Lengkong</button></a>
            <a href="#"><button class="button">Mandalajati</button></a>
            <a href="#"><button class="button">Panyileukan</button></a>
            <a href="#"><button class="button">Rancasari</button></a>
            <a href="#"><button class="button">Regol</button></a>
            <a href="#"><button class="button">Sukajadi</button></a>
            <a href="#"><button class="button">Sumur Bandung</button></a>
            <a href="#"><button class="button">Ujung Berung</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
