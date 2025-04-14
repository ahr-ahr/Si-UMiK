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
        <a href="{{ route('kalsel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Barito Kuala</h2>
        <div class="grid">
            <a href="#"><button class="button"> Marabahan</button></a>
            <a href="#"><button class="button"> Alalak</button></a>
            <a href="#"><button class="button"> Anjir Muara</button></a>
            <a href="#"><button class="button"> Jejangkit</button></a>
            <a href="#"><button class="button"> Tabukanen</button></a>
            <a href="#"><button class="button"> Bakumpai</button></a>
            <a href="#"><button class="button"> Mandastana</button></a>
            <a href="#"><button class="button"> Berangas</button></a>
            <a href="#"><button class="button"> Sungai Tabuk</button></a>
            <a href="#"><button class="button"> Belawang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
