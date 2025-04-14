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
        <h2>Kabupaten Bima</h2>
        <div class="grid">
            <a href="#"><button class="button">Belo</button></a>
            <a href="#"><button class="button">Bolo</button></a>
            <a href="#"><button class="button">Donggo</button></a>
            <a href="#"><button class="button">Lambu</button></a>
            <a href="#"><button class="button">Madapangga</button></a>
            <a href="#"><button class="button">Monta</button></a>
            <a href="#"><button class="button">Palibelo</button></a>
            <a href="#"><button class="button">Sape</button></a>
            <a href="#"><button class="button">Tambora</button></a>
            <a href="#"><button class="button">Wawo</button></a>
            <a href="#"><button class="button">Wera</button></a>
            <a href="#"><button class="button">Woha</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
