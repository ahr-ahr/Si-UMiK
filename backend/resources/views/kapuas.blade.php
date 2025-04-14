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
        <a href="{{ route('kalteng') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Kapuas</h2>
        <div class="grid">
            <a href="#"><button class="button"> Kapuas Kuala</button></a>
            <a href="#"><button class="button"> Selat</button></a>
            <a href="#"><button class="button"> Pasak Talawang</button></a>
            <a href="#"><button class="button"> Pulau Petak</button></a>
            <a href="#"><button class="button"> Tamban Catur</button></a>
            <a href="#"><button class="button"> Timpah</button></a>
            <a href="#"><button class="button"> Mandau Talawang</button></a>
            <a href="#"><button class="button"> Bataguh</button></a>
            <a href="#"><button class="button"> Kapuas Barat</button></a>
            <a href="#"><button class="button"> Kapuas Timur</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
