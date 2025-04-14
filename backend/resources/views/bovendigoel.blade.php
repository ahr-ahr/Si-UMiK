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
        <a href="{{ route('papua') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Boven Digoel</h2>
        <div class="grid">
            <a href="#"><button class="button"> Tanah Merah</button></a>
            <a href="#"><button class="button"> Mandobo</button></a>
            <a href="#"><button class="button"> Fofi</button></a>
            <a href="#"><button class="button"> Jair</button></a>
            <a href="#"><button class="button"> Ngguti</button></a>
            <a href="#"><button class="button"> Kepi</button></a>
            <a href="#"><button class="button"> Kunda</button></a>
            <a href="#"><button class="button"> Sota</button></a>
            <a href="#"><button class="button"> Ulilin</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
