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
        <a href="{{ route('lokasiaceh') }}"><div class="back-button">&larr;</div></a>
                <h2>kabupaten pidie</h2>
                <div class="grid">
                    <a href="#"><button class="button">batee</button></a>
                    <a href="#"><button class="button">delima</button></a>
                    <a href="{{ route('job') }}"><button class="button">geumpang</button></a>
                    <a href="#"><button class="button">glumpang baro</button></a>
                    <a href="#"><button class="button">glumpang tiga</button></a>
                    <a href="#"><button class="button">grong grong</button></a>
                    <a href="#"><button class="button">indrajaya</button></a>
                    <a href="#"><button class="button">kembang tanjong</button></a>
                    <a href="#"><button class="button">keumala</button></a>
                    <a href="#"><button class="button">kota sigli</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>