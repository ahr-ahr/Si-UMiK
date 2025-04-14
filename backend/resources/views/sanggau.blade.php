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
        <a href="{{ route('kalbar') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Sanggau</h2>
        <div class="grid">
            <a href="#"><button class="button"> Sanggau</button></a>
            <a href="#"><button class="button"> Sekadau</button></a>
            <a href="#"><button class="button"> Tayan Hilir</button></a>
            <a href="#"><button class="button"> Tayan Hulu</button></a>
            <a href="#"><button class="button"> Kembayan</button></a>
            <a href="#"><button class="button"> Entikong</button></a>
            <a href="#"><button class="button"> Parindu</button></a>
            <a href="#"><button class="button"> Meliau</button></a>
            <a href="#"><button class="button"> Balai</button></a>
            <a href="#"><button class="button"> Noyan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
