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
        <a href="{{ route('lokasi') }}"><div class="back-button">&larr;</div></a>
                <h2>kota pamekasan</h2>
                <div class="grid">
                    <a href="#"><button class="button">tlanakan</button></a>
                    <a href="#"><button class="button">pademawu</button></a>
                    <a href="{{ route('job') }}"><button class="button">galis</button></a>
                    <a href="#"><button class="button">larangan</button></a>
                    <a href="#"><button class="button">proppo</button></a>
                    <a href="#"><button class="button">palengaan</button></a>
                    <a href="#"><button class="button">pegantenan</button></a>
                    <a href="#"><button class="button">kadur</button></a>
                    <a href="#"><button class="button">pakong</button></a>
                    <a href="#"><button class="button">waru</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>