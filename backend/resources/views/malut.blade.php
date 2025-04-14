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
                <h2>Maluku utara</h2>
                <div class="grid">
                    <a href="{{ route('halmaherabarat') }}"><button class="button">kabupaten halmahera barat</button></a>
                    <a href="{{ route('halmaheratengah') }}"><button class="button">kabupaten halmahera tengah</button></a>
                    <a href="{{ route('halmaherautara') }}"><button class="button">kabupaten halmahera utara</button></a>
                    <a href="{{ route('halmaheraselatan') }}"><button class="button">kabupaten halmahera selatan</button></a>
                    <a href="{{ route('kepulauansula') }}"><button class="button">kabupaten kepulauan sula</button></a>
                    <a href="{{ route('halmaheratimur') }}"><button class="button">kabupaten halmahera timur</button></a>
                    <a href="{{ route('pulaumorotai') }}"><button class="button">kabupaten pulau morotai</button></a>
                    <a href="{{ route('pulautaliabu') }}"><button class="button">kabupaten pulau taliabu</button></a>
                    <a href="{{ route('ternate') }}"><button class="button">kota ternate</button></a>
                    <a href="{{ route('tidorekepulauan') }}"><button class="button">kota tidore kepulauan</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>