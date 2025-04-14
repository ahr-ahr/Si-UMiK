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
        <a href="{{ route('sultra') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Muna Barat</h2>
        <div class="grid">
            <a href="#"><button class="button"> Lawa</button></a>
            <a href="#"><button class="button"> Tiworo Tengah</button></a>
            <a href="#"><button class="button"> Tiworo Utara</button></a>
            <a href="#"><button class="button"> Tiworo Selatan</button></a>
            <a href="#"><button class="button"> Barangka</button></a>
            <a href="#"><button class="button"> Maginti</button></a>
            <a href="#"><button class="button"> Sarjo</button></a>
            <a href="#"><button class="button"> Pasir Putih</button></a>
            <a href="#"><button class="button"> Wakorumba Selatan</button></a>
            <a href="#"><button class="button"> Wakorumba</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
