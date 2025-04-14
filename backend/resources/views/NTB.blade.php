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
                <h2>Nusa Tenggara Barat</h2>
                <div class="grid">
                    <a href="{{ route('bima') }}"><button class="button">kabupaten bima</button></a>
                    <a href="{{ route('dompu') }}"><button class="button">kabupaten dompu</button></a>
                    <a href="{{ route('lombokbarat') }}"><button class="button">kabupaten lombok barat</button></a>
                    <a href="{{ route('lomboktengah') }}"><button class="button">kabupaten lombok tengah</button></a>
                    <a href="{{ route('lomboktimur') }}"><button class="button">kabupaten lombok timur</button></a>
                    <a href="{{ route('lombokutara') }}"><button class="button">kabupaten lombok utara</button></a>
                    <a href="{{ route('sumbawa') }}"><button class="button">kabupaten sumbawa</button></a>
                    <a href="{{ route('sumbawabarat') }}"><button class="button">kabupaten sumbawa barat</button></a>
                    <a href="{{ route('kotabima') }}"><button class="button">kota bima</button></a>
                    <a href="{{ route('kotamataram') }}"><button class="button">kota mataram</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>