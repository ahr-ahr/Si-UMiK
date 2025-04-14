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
                <h2>Kota kediri</h2>
                <div class="grid">
                    <a href="#"><button class="button">orang jahat</button></a>
                    <a href="#"><button class="button">banyaka</button></a>
                    <a href="{{ route('job') }}"><button class="button">gampengrejo</button></a>
                    <a href="#"><button class="button">grogol</button></a>
                    <a href="#"><button class="button">gurah</button></a>
                    <a href="#"><button class="button">kandangan</button></a>
                    <a href="#"><button class="button">kandat</button></a>
                    <a href="#"><button class="button">kayen kidul</button></a>
                    <a href="#"><button class="button">kepung</button></a>
                    <a href="#"><button class="button">kras</button></a>
                    <a href="#"><button class="button">kunjang</button></a>
                    <a href="#"><button class="button">semangat</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>