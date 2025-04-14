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
        <a href="{{ route('NTT') }}"><div class="back-button">&larr;</div></a> 
        <h2>Kabupaten Sumba Barat</h2>
        <div class="grid">
            <a href="#"><button class="button"> Waikabubak</button></a>
            <a href="#"><button class="button"> Loli</button></a>
            <a href="#"><button class="button"> Lamboya</button></a>
            <a href="#"><button class="button"> Lamboya Barat</button></a>
            <a href="#"><button class="button"> Wanokaka</button></a>
            <a href="#"><button class="button"> Tarimbaro</button></a>
            <a href="#"><button class="button"> Kambaniru</button></a>
            <a href="#"><button class="button"> Tana Righu</button></a>
            <a href="#"><button class="button"> Kodi</button></a>
            <a href="#"><button class="button"> Kodi Bangedo</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
