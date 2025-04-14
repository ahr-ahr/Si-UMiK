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
        <h2>Kabupaten Merauke</h2>
        <div class="grid">
            <a href="#"><button class="button"> Merauke</button></a>
            <a href="#"><button class="button"> Muting</button></a>
            <a href="#"><button class="button"> Kurik</button></a>
            <a href="#"><button class="button"> Tanah Miring</button></a>
            <a href="#"><button class="button"> Okaba</button></a>
            <a href="#"><button class="button"> Elikobel</button></a>
            <a href="#"><button class="button"> Sota</button></a>
            <a href="#"><button class="button"> Jagebob</button></a>
            <a href="#"><button class="button"> Semangga</button></a>
            <a href="#"><button class="button"> Kimaam</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
