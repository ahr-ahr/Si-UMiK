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
        <a href="{{ route('sulasel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kota Luwu Utara</h2>
        <div class="grid">
            <a href="#"><button class="button"> Masamba</button></a>
            <a href="#"><button class="button"> Sabbang</button></a>
            <a href="#"><button class="button"> Rantepao</button></a>
            <a href="#"><button class="button"> Baebunta</button></a>
            <a href="#"><button class="button"> Seko</button></a>
            <a href="#"><button class="button"> Malangke</button></a>
            <a href="#"><button class="button"> Malangke Barat</button></a>
            <a href="#"><button class="button"> Bone-Bone</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
