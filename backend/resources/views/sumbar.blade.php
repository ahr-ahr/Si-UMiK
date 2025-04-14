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
                <h2>sumatera barat</h2>
                <div class="grid">
                    <a href="{{ route('agan') }}"><button class="button">kabupaten agan</button></a>
                    <a href="{{ route('dharmasraya') }}"><button class="button">kabupaten dharmasraya</button></a>
                    <a href="{{ route('mentawi') }}"><button class="button">kepulauan mentawi</button></a>
                    <a href="{{ route('limapuluhkota') }}"><button class="button">lima puluh kota</button></a>
                    <a href="{{ route('padangpariman') }}"><button class="button">padang pariaman</button></a>
                    <a href="{{ route('pasaman') }}"><button class="button">kabupaten pasaman</button></a>
                    <a href="{{ route('pesisirselatan') }}"><button class="button">pesisir selatan</button></a>
                    <a href="{{ route('sijunjung') }}"><button class="button">sijunjung</button></a>
                    <a href="{{ route('solok') }}"><button class="button">kabupaten solok</button></a>
                    <a href="{{ route('tanahdatar') }}"><button class="button">kabupaten tanah datar</button></a>
                    <a href="{{ route('bukittinggi') }}"><button class="button">kota bukittinggi</button></a>
                    <a href="{{ route('kotapadang') }}"><button class="button">kota padang</button></a>
                    <a href="{{ route('padangpanjang') }}"><button class="button">kota padangpanjang</button></a>
                    <a href="{{ route('pariaman') }}"><button class="button">kota pariaman</button></a>
                    <a href="{{ route('payakumbuh') }}"><button class="button">kota payakumbuh</button></a>
                    <a href="{{ route('sawahlunto') }}"><button class="button">kota sawahlunto</button></a>
                    <a href="{{ route('kotasolok') }}"><button class="button">kota solok</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>