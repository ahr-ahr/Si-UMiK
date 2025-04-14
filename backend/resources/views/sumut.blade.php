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
                <h2>sumatera utara</h2>
                <div class="grid">
                    <a href="{{ route('asahan') }}"><button class="button">kabupaten asahan</button></a>
                    <a href="{{ route('batubara') }}"><button class="button">kabupaten batubara</button></a>
                    <a href="{{ route('dairi') }}"><button class="button">kabupaten dairi</button></a>
                    <a href="{{ route('deliserdang') }}"><button class="button">deli serdang</button></a>
                    <a href="{{ route('humbang') }}"><button class="button">humbang hasundutan</button></a>
                    <a href="{{ route('labuhanbatusel') }}"><button class="button">labuhanbatu selatan</button></a>
                    <a href="{{ route('labuhanbatuutara') }}"><button class="button">labuhanbatu utara</button></a>
                    <a href="{{ route('langkat') }}"><button class="button">langkat</button></a>
                    <a href="{{ route('mandaling') }}"><button class="button">mandaling natal</button></a>
                    <a href="{{ route('nias') }}"><button class="button">kabupaten nias</button></a>
                    <a href="{{ route('niasbarat') }}"><button class="button">nias barat</button></a>
                    <a href="{{ route('niasselatan') }}"><button class="button">nias selatan</button></a>
                    <a href="{{ route('niasutara') }}"><button class="button">nias utara</button></a>
                    <a href="{{ route('padanglawas') }}"><button class="button">padang lawas</button></a>
                    <a href="{{ route('padanglawasut') }}"><button class="button">padang lawas utara</button></a>
                    <a href="{{ route('pakpakbharat') }}"><button class="button">pakpak bharat</button></a>
                    <a href="{{ route('samosir') }}"><button class="button">kabupaten samosir</button></a>
                    <a href="{{ route('serdangbedagai') }}"><button class="button">serdang bedagai</button></a>
                    <a href="{{ route('simalungun') }}"><button class="button">simalungun</button></a>
                    <a href="{{ route('tapanulisel') }}"><button class="button">tapanuli selatan</button></a>
                    <a href="{{ route('tapanuliteng') }}"><button class="button">tapanuli tengah</button></a>
                    <a href="{{ route('tapanuliut') }}"><button class="button">tapanuli utara</button></a>
                    <a href="{{ route('tobasamosir') }}"><button class="button">toba samosir</button></a>
                    <a href="{{ route('kotabinjai') }}"><button class="button">kota binjai</button></a>
                    <a href="{{ route('gunungsitoli') }}"><button class="button">kota gunungsitoli</button></a>
                    <a href="{{ route('kotamedan') }}"><button class="button">kota medan</button></a>
                    <a href="{{ route('padansidempuan') }}"><button class="button">kota padangsidempuan</button></a>
                    <a href="{{ route('permartasiantar') }}"><button class="button">kota permatangsiantar</button></a>
                    <a href="{{ route('sibolga') }}"><button class="button">kota sibolga</button></a>
                    <a href="{{ route('tanjungbalai') }}"><button class="button">kota tanjungbalai</button></a>
                    <a href="{{ route('tebingtinggi') }}"><button class="button">kota tebingtinggi</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>