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
        <h2>Kabupaten Lombok Timur</h2>
        <div class="grid">
            <a href="#"><button class="button">Aikmel</button></a>
            <a href="#"><button class="button">Jerowaru</button></a>
            <a href="#"><button class="button">Keruak</button></a>
            <a href="#"><button class="button">Labuhan Haji</button></a>
            <a href="#"><button class="button">Masbagik</button></a>
            <a href="#"><button class="button">Montong Gading</button></a>
            <a href="#"><button class="button">Pringgabaya</button></a>
            <a href="#"><button class="button">Pringgasela</button></a>
            <a href="#"><button class="button">Sakra</button></a>
            <a href="#"><button class="button">Sakra Barat</button></a>
            <a href="#"><button class="button">Sakra Timur</button></a>
            <a href="#"><button class="button">Sambelia</button></a>
            <a href="#"><button class="button">Selong</button></a>
            <a href="#"><button class="button">Sembalun</button></a>
            <a href="#"><button class="button">Sikur</button></a>
            <a href="#"><button class="button">Suela</button></a>
            <a href="#"><button class="button">Suralaga</button></a>
            <a href="#"><button class="button">Terara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
