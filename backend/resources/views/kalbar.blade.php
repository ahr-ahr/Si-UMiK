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
                <h2>kalimantan barat</h2>
                <div class="grid">
                    <a href="{{ route('bengkayang') }}"><button class="button">kabupaten bengkayang</button></a>
                    <a href="{{ route('kapuashalu') }}"><button class="button">kabupaten kapuas halu</button></a>
                    <a href="{{ route('hulu') }}"><button class="button">kabupaten hulu</button></a>
                    <a href="{{ route('kayongutara') }}"><button class="button">kabupaten kayong utara</button></a>
                    <a href="{{ route('ketapang') }}"><button class="button">kabupaten ketapang</button></a>
                    <a href="{{ route('kuburaya') }}"><button class="button">kabupaten kubu raya</button></a>
                    <a href="{{ route('landak') }}"><button class="button">kabupaten landak</button></a>
                    <a href="{{ route('melawi') }}"><button class="button">kabupaten melawi</button></a>
                    <a href="{{ route('mempawah') }}"><button class="button">kabupaten mempawah</button></a>
                    <a href="{{ route('sambas') }}"><button class="button">kabupaten sambas</button></a>
                    <a href="{{ route('sanggau') }}"><button class="button">kabupaten sanggau</button></a>
                    <a href="{{ route('sekadau') }}"><button class="button">kabupaten sekadau</button></a>
                    <a href="{{ route('sintang') }}"><button class="button">kabupaten sintang</button></a>
                    <a href="{{ route('kotapontianak') }}"><button class="button">kota pontianak</button></a>
                    <a href="{{ route('kotasingkawang') }}"><button class="button">kota singkawang</button></a>
                    <a href="{{ route('kotasawahlunto') }}"><button class="button">kota sawahlunto</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>