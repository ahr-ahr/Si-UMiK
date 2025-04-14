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
        <a href="{{ route('kalteng') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kota Palangka Raya</h2>
        <div class="grid">
            <a href="#"><button class="button"> Pahandut</button></a>
            <a href="#"><button class="button"> Bukit Batu</button></a>
            <a href="#"><button class="button"> Jekan Raya</button></a>
            <a href="#"><button class="button"> Sabangau</button></a>
            <a href="#"><button class="button"> Rakumpit</button></a>
            <a href="#"><button class="button"> Kahayan Tengah</button></a>
            <a href="#"><button class="button"> Selat</button></a>
            <a href="#"><button class="button"> Menteng</button></a>
            <a href="#"><button class="button"> Tumbang Rungan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
