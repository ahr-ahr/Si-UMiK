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
        <h2>Kabupaten Manggarai Timur</h2>
        <div class="grid">
            <a href="#"><button class="button"> Kota Komba</button></a>
            <a href="#"><button class="button"> Elar</button></a>
            <a href="#"><button class="button"> Ruteng</button></a>
            <a href="#"><button class="button"> Lamba Leda</button></a>
            <a href="#"><button class="button"> Wae Ri'i</button></a>
            <a href="#"><button class="button"> Detusoko</button></a>
            <a href="#"><button class="button"> Boawae</button></a>
            <a href="#"><button class="button"> Rana Mese</button></a>
            <a href="#"><button class="button"> Poco Roes</button></a>
            <a href="#"><button class="button"> Borong</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
