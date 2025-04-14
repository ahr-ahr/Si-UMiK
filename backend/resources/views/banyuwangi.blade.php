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
                <h2>kabupaten banyuwangi</h2>
                <div class="grid">
                    <a href="#"><button class="button">Pesanggaran</button></a>
                    <a href="#"><button class="button">Siliragung</button></a>
                    <a href="{{ route('job') }}"><button class="button">Bangorejo</button></a>
                    <a href="#"><button class="button">Purwohajo</button></a>
                    <a href="#"><button class="button">Tegallimo</button></a>
                    <a href="#"><button class="button">Muncar</button></a>
                    <a href="#"><button class="button">Cluring</button></a>
                    <a href="#"><button class="button">Gambiran</button></a>
                    <a href="#"><button class="button">Tegalsari</button></a>
                    <a href="#"><button class="button">Glenmore</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>