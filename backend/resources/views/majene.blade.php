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
        <a href="{{ route('sulbar') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Majene</h2>
        <div class="grid">
            <a href="#"><button class="button"> Majene</button></a>
            <a href="#"><button class="button"> Malunda</button></a>
            <a href="#"><button class="button"> Pamboang</button></a>
            <a href="#"><button class="button"> Sendana</button></a>
            <a href="#"><button class="button"> Tommo</button></a>
            <a href="#"><button class="button"> Ulumanda</button></a>
            <a href="#"><button class="button"> Bonggakaradeng</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
