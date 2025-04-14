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
        <h2>Kabupaten Konawe Utara</h2>
        <div class="grid">
            <a href="#"><button class="button"> Asera</button></a>
            <a href="#"><button class="button"> Lasolo</button></a>
            <a href="#"><button class="button"> Lasolo Kepulauan</button></a>
            <a href="#"><button class="button"> Langgikima</button></a>
            <a href="#"><button class="button"> Motui</button></a>
            <a href="#"><button class="button"> Oheo</button></a>
            <a href="#"><button class="button"> Wiwirano</button></a>
            <a href="#"><button class="button"> Sawa</button></a>
            <a href="#"><button class="button"> Puriala</button></a>
            <a href="#"><button class="button"> Ronggotohu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
