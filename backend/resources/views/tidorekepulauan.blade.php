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
        <a href="{{ route('malut') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kota Tidore Kepulauan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Tidore</button></a>
            <a href="#"><button class="button"> Tidore Timur</button></a>
            <a href="#"><button class="button"> Tidore Utara</button></a>
            <a href="#"><button class="button"> Tidore Selatan</button></a>
            <a href="#"><button class="button"> Oba</button></a>
            <a href="#"><button class="button"> Oba Utara</button></a>
            <a href="#"><button class="button"> Oba Selatan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
