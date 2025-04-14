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
                <h2>sumatera selatan</h2>
                <div class="grid">
                    <a href="{{ route('banyuasin') }}"><button class="button">kabupaten banyuasin</button></a>
                    <a href="{{ route('empatlawang') }}"><button class="button">kabupaten empat lawang</button></a>
                    <a href="{{ route('lahat') }}"><button class="button">kabupaten lahat</button></a>
                    <a href="{{ route('muaraenim') }}"><button class="button">kabupaten muara enim</button></a>
                    <a href="{{ route('muisirawas') }}"><button class="button">kabupaten muisi rawas</button></a>
                    <a href="{{ route('mugirawasut') }}"><button class="button">kabupaten mugi rawas utara</button></a>
                    <a href="{{ route('oganilir') }}"><button class="button">ogan ilir</button></a>
                    <a href="{{ route('ogankomeringilir') }}"><button class="button">ogan komering ilir</button></a>
                    <a href="{{ route('ogankomeringulu') }}"><button class="button">ogan komering ulu</button></a>
                    <a href="{{ route('oganuluselatan') }}"><button class="button">ogan komering ulu selatan</button></a>
                    <a href="{{ route('oganulutimur') }}"><button class="button">ogan komering ulu timur</button></a>
                    <a href="{{ route('penukalabab') }}"><button class="button">penukal abab lematang ilir</button></a>
                    <a href="{{ route('kotalubuklinggau') }}"><button class="button">kota lubuklinggau</button></a>
                    <a href="{{ route('kotapagaralam') }}"><button class="button">kota pagar alam</button></a>
                    <a href="{{ route('kotapalembang') }}"><button class="button">kota palembang</button></a>
                    <a href="{{ route('kotaprabumulih') }}"><button class="button">kota prabumulih</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>