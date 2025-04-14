<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Daerah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href={{ asset('css/lokasiawal.css') }}>
</head>
<body>
    <div class="container">
        <div class="back-button">
            <a href={{ route('layanan') }}><i class="fa-solid fa-arrow-left"></i></a>
        </div>
                <h2>pilih lokasi anda</h2>
                <div class="grid">
                    <a href="{{ route('lokasiaceh') }}"><button class="button">provinsi aceh</button></a>
                    <a href="{{ route('sumut') }}"><button class="button">sumatera utara</button></a>
                    <a href="{{ route('sumbar') }}"><button class="button">sumatera barat</button></a>
                    <a href="{{ route('sumaterasel') }}"><button class="button">sumatera selatan</button></a>
                    <a href="{{ route('lokasiriau') }}"><button class="button">provinsi riau</button></a>
                    <a href="{{ route('pulauriau') }}"><button class="button">kepulauan riau</button></a>
                    <a href="{{ route('jambi') }}"><button class="button">provinsi jambi</button></a>
                    <a href="{{ route('bengkulu') }}"><button class="button">provinsi bengkulu</button></a>
                    <a href="{{ route('bangkabelitung') }}"><button class="button">bangka belitung</button></a>
                    <a href="{{ route('lampung') }}"><button class="button">provinsi lampung</button></a>
                    <a href="{{ route('banten') }}"><button class="button">provinsi banten</button></a>
                    <a href="{{ route('jawabarat') }}"><button class="button">jawa barat</button></a>
                    <a href="{{ route('jawatengah') }}"><button class="button">jawa tengah</button></a>
                    <a href="{{ route('jawatimur') }}"><button class="button">jawa timur</button></a>
                    <a href="{{ route('DKI') }}"><button class="button">DKI jakarta</button></a>
                    <a href="{{ route('yogya') }}"><button class="button">Yogyakarta</button></a>
                    <a href="{{ route('bali')}}"><button class="button">bali</button></a>
                    <a href="{{ route('NTB') }}"><button class="button">nusa tenggara barat</button></a>
                    <a href="{{ route('NTT') }}"><button class="button">nusa tenggara timur</button></a>
                    <a href="{{ route ('kalbar') }}"><button class="button">kalimantan barat</button></a>
                    <a href="{{ route('kalsel') }}"><button class="button">kalimantan selatan</button></a>
                    <a href="{{ route('kalteng') }}"><button class="button">kalimantan tengah</button></a>
                    <a href="{{ route('kaltim') }}"><button class="button">kalimantan timur</button></a>
                    <a href="{{ route('kaltara') }}"><button class="button">kalimantan utara</button></a>
                    <a href="{{ route('gorontalo') }}"><button class="button">provinsi gorontalo</button></a>
                    <a href="{{ route('sulasel') }}"><button class="button">sulawesi selatan</button></a>
                    <a href="{{ route('sultra') }}"><button class="button">sulawesi tenggara</button></a>
                    <a href="{{ route('sulteng') }}"><button class="button">sulawesi tengah</button></a>
                    <a href="{{ route('sulut') }}"><button class="button">sulawesi utara</button></a>
                    <a href="{{ route('sulbar') }}"><button class="button">sulawesi barat</button></a>
                    <a href="{{ route('maluku') }}"><button class="button">provinsi maluku</button></a>
                    <a href="{{ route('malut') }}"><button class="button">provinsi maluku utara</button></a>
                    <a href="{{ route('papua') }}"><button class="button">provinsi papua</button></a>
                    <a href="{{ route('papuabar') }}"><button class="button">provinsi papua barat</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>