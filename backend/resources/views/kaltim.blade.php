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
                <h2>Kalimantan timur</h2>
                <div class="grid">
                    <a href="{{ route('barau') }}"><button class="button">kabupaten barau</button></a>
                    <a href="{{ route('kutaibarat') }}"><button class="button">kabupaten kutai barat</button></a>
                    <a href="{{ route('kutaikartenagara') }}"><button class="button">kabupaten kutai kartenagara</button></a>
                    <a href="{{ route('kutaitimur') }}"><button class="button">kabupaten kutai timur</button></a>
                    <a href="{{ route('mahakamhulu') }}"><button class="button">kabupaten mahakam hulu</button></a>
                    <a href="{{ route('paser') }}"><button class="button">kabupaten paser</button></a>
                    <a href="{{ route('penajampaserutara') }}"><button class="button">kabupaten penajam paser utara</button></a>
                    <a href="{{ route('balikpapan') }}"><button class="button">kota balikpapan</button></a>
                    <a href="{{ route('bontang') }}"><button class="button">kota bontang</button></a>
                    <a href="{{ route('samarinda') }}"><button class="button">kota samarinda</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>