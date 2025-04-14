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
        <a href="{{ route('lokasiawal') }}"><div class="back-button">&larr;</div></a>
                <h2>kalimantan tengah</h2>
                <div class="grid">
                    <a href="{{ route('baritoselatan') }}"><button class="button">kabupaten barito selatan</button></a>
                    <a href="{{ route('baritotimur') }}"><button class="button">kabupaten barito timur</button></a>
                    <a href="{{ route('baritoutara') }}"><button class="button">kabupaten barito utara</button></a>
                    <a href="{{ route('gunungmas') }}"><button class="button">kabupaten gunung mas</button></a>
                    <a href="{{ route('kapuas') }}"><button class="button">kabupaten kapuas</button></a>
                    <a href="{{ route('katingan') }}"><button class="button">kabupaten katingan</button></a>
                    <a href="{{ route('kotawaringinbarat') }}"><button class="button">kabupaten kotawaringin barat</button></a>
                    <a href="{{ route('kotawaringintimur') }}"><button class="button">kabupaten kotawaringin timur</button></a>
                    <a href="{{ route('lamandu') }}"><button class="button">kabupaten lamandu</button></a>
                    <a href="{{ route('murungraya') }}"><button class="button">kabupaten murung raya</button></a>
                    <a href="{{ route('pulangpisau') }}"><button class="button">kabupaten pulang pisau</button></a>
                    <a href="{{ route('sukamara') }}"><button class="button">kabupaten sukamara</button></a>
                    <a href="{{ route('seruyan') }}"><button class="button">kabupaten seruyan</button></a>
                    <a href="{{ route('palangkaraya') }}"><button class="button">kota palangka raya</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>