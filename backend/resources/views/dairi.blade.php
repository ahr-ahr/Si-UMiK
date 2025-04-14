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
        <a href="{{ route('sumut') }}"><div class="back-button">&larr;</div></a>
                <h2>Kabupaten Dairi</h2>
                <div class="grid">
                    <a href="#"><button class="button">Sidikalang</button></a>
                    <a href="#"><button class="button">Parbuluan</button></a>
                    <a href="{{ route('job') }}"><button class="button">Sumbul</button></a>
                    <a href="#"><button class="button">Silima Pungga-Pungga</button></a>
                    <a href="#"><button class="button">Tigalingga</button></a>
                    <a href="#"><button class="button">Batang Kuis</button></a>
                    <a href="#"><button class="button">Gunung Sitember</button></a>
                    <a href="#"><button class="button">Lae Parira</button></a>
                    <a href="#"><button class="button">Bintang Meriah</button></a>
                    <a href="#"><button class="button">Pakkat</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
