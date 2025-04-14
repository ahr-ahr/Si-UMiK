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
        <h2>Kota Kupang</h2>
        <div class="grid">
            <a href="#"><button class="button"> Alak</button></a>
            <a href="#"><button class="button"> Kota Raja</button></a>
            <a href="#"><button class="button"> Kelapa Lima</button></a>
            <a href="#"><button class="button"> Oebobo</button></a>
            <a href="#"><button class="button"> Klojen</button></a>
            <a href="#"><button class="button"> Nusaniwe</button></a>
            <a href="#"><button class="button"> Maulafa</button></a>
            <a href="#"><button class="button"> Kota Barat</button></a>
            <a href="#"><button class="button"> Kota Timur</button></a>
            <a href="#"><button class="button"> Oebufu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
