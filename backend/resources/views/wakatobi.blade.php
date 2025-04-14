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
        <h2>Kabupaten Wakatobi</h2>
        <div class="grid">
            <a href="#"><button class="button"> Wangiwangi</button></a>
            <a href="#"><button class="button"> Kaledupa</button></a>
            <a href="#"><button class="button"> Tomia</button></a>
            <a href="#"><button class="button"> Binongko</button></a>
            <a href="#"><button class="button"> Kabaena</button></a>
            <a href="#"><button class="button"> Kabaena Selatan</button></a>
            <a href="#"><button class="button"> Kabaena Timur</button></a>
            <a href="#"><button class="button"> Kabaena Utara</button></a>
            <a href="#"><button class="button"> Wangi-Wangi Selatan</button></a>
            <a href="#"><button class="button"> Wangi-Wangi Timur</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
