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
                <h2>sulawesi tengah</h2>
                <div class="grid">
                    <a href="{{ route('banggai') }}"><button class="button">kabupaten banggai</button></a>
                    <a href="{{ route('banggaikepulauan') }}"><button class="button">kabupaten banggai kepulauan</button></a>
                    <a href="{{ route('banggailaut') }}"><button class="button">kabupaten banggai laut</button></a>
                    <a href="{{ route('buol') }}"><button class="button">kabupaten buol</button></a>
                    <a href="{{ route('donggala') }}"><button class="button">kabupaten donggala</button></a>
                    <a href="{{ route('morowali') }}"><button class="button">kabupaten morowali</button></a>
                    <a href="{{ route('morowaliutara') }}"><button class="button">kabupaten morowali utara</button></a>
                    <a href="{{ route('parigimoutong') }}"><button class="button">kabupaten parigi moutong</button></a>
                    <a href="{{ route('poso') }}"><button class="button">kabupaten poso</button></a>
                    <a href="{{ route('sigi') }}"><button class="button">kabupaten sigi</button></a>
                    <a href="{{ route('tojouna-una') }}"><button class="button">kabupaten tojo una-una</button></a>
                    <a href="{{ route('toli-toli') }}"><button class="button">kota toli-toli</button></a>
                    <a href="{{ route('palu') }}"><button class="button">kota palu</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>