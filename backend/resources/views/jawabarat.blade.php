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
                <h2>Jawa barat</h2>
                <div class="grid">
                    <a href="{{ route('bandungbarat') }}"><button class="button">bandung barat</button></a>
                    <a href="{{ route('bekasi') }}"><button class="button">bekasi</button></a>
                    <a href="{{ route('bogor') }}"><button class="button">bogor</button></a>
                    <a href="{{ route('ciamis') }}"><button class="button">ciamis</button></a>
                    <a href="{{ route('cianjur') }}"><button class="button">cianjur</button></a>
                    <a href="{{ route('cirebon') }}"><button class="button">cirebon</button></a>
                    <a href="{{ route('garut') }}"><button class="button">garut</button></a>
                    <a href="{{ route('indramayu') }}"><button class="button">indramayu</button></a>
                    <a href="{{ route('karawang') }}"><button class="button">karawang</button></a>
                    <a href="{{ route('kuningan') }}"><button class="button">kuningan</button></a>
                    <a href="{{ route('majalengka') }}"><button class="button">majalengka</button></a>
                    <a href="{{ route('pangandaran') }}"><button class="button">pangandaran</button></a>
                    <a href="{{ route('purwakarta') }}"><button class="button">purwakarta</button></a>
                    <a href="{{ route('subang') }}"><button class="button">subang</button></a>
                    <a href="{{ route('sukabumi') }}"><button class="button">sukabumi</button></a>
                    <a href="{{ route('sumedang') }}"><button class="button">sumedang</button></a>
                    <a href="{{ route('tasikmalaya') }}"><button class="button">tasikmalaya</button></a>
                    <a href="{{ route('kotabandung') }}"><button class="button">kota bandung</button></a>
                    <a href="{{ route('kotabanjar') }}"><button class="button">kota banjar</button></a>
                    <a href="{{ route('kotabekasi') }}"><button class="button">kota bekasi</button></a>
                    <a href="{{ route('kotabogor') }}"><button class="button">kota bogor</button></a>
                    <a href="{{ route('kotacimahi') }}"><button class="button">kota cimahi</button></a>
                    <a href="{{ route('kotacirebon') }}"><button class="button">kota cirebon</button></a>
                    <a href="{{ route('kotadepok') }}"><button class="button">kota depok</button></a>
                    <a href="{{ route('kotasukabumi') }}"><button class="button">kota sukabumi</button></a>
                    <a href="{{ route('kotatasikmalaya') }}"><button class="button">kota tasikmalaya</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>