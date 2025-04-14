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
        <h2>Kabupaten Manggarai</h2>
        <div class="grid">
            <a href="#"><button class="button"> Ruteng</button></a>
            <a href="#"><button class="button"> Langke Rembong</button></a>
            <a href="#"><button class="button"> Cibal</button></a>
            <a href="#"><button class="button"> Reok</button></a>
            <a href="#"><button class="button"> Lembor</button></a>
            <a href="#"><button class="button"> Lembor Selatan</button></a>
            <a href="#"><button class="button"> Satar Mese</button></a>
            <a href="#"><button class="button"> Satar Mese Barat</button></a>
            <a href="#"><button class="button"> Wae Rii</button></a>
            <a href="#"><button class="button"> Kebar</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
