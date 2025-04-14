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
        <h2>Kabupaten Mimika</h2>
        <div class="grid">
            <a href="#"><button class="button"> Mimika Baru</button></a>
            <a href="#"><button class="button"> Wania</button></a>
            <a href="#"><button class="button"> Timi</button></a>
            <a href="#"><button class="button"> Kuala Kencana</button></a>
            <a href="#"><button class="button"> Malind</button></a>
            <a href="#"><button class="button"> Jila</button></a>
            <a href="#"><button class="button"> Agimuga</button></a>
            <a href="#"><button class="button"> Mimapura</button></a>
            <a href="#"><button class="button"> Otomona</button></a>
            <a href="#"><button class="button"> Bora</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
