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
        <a href="{{ route('sulasel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Tana Toraja</h2>
        <div class="grid">
            <a href="#"><button class="button"> Makale</button></a>
            <a href="#"><button class="button"> Mengkendek</button></a>
            <a href="#"><button class="button"> Rantetayo</button></a>
            <a href="#"><button class="button"> Baruppu</button></a>
            <a href="#"><button class="button"> Buntu Pepasan</button></a>
            <a href="#"><button class="button"> Tondon</button></a>
            <a href="#"><button class="button"> Saluputti</button></a>
            <a href="#"><button class="button"> Sangalla</button></a>
            <a href="#"><button class="button"> Sanggalangi</button></a>
            <a href="#"><button class="button"> Rembon</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
