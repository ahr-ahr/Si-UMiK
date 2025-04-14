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
        <h2>Kabupaten Mamberamo Tengah</h2>
        <div class="grid">
            <a href="#"><button class="button"> Bomba</button></a>
            <a href="#"><button class="button"> Siret</button></a>
            <a href="#"><button class="button"> Suru-Suru</button></a>
            <a href="#"><button class="button"> Nimbokrangi</button></a>
            <a href="#"><button class="button"> Teleli</button></a>
            <a href="#"><button class="button"> Ekadide</button></a>
            <a href="#"><button class="button"> Jila</button></a>
            <a href="#"><button class="button"> Pefuar</button></a>
            <a href="#"><button class="button"> Tangkit</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
