<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Daerah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/lokasi.css') }}">
</head>
<body>
    <div class="container">
        <a href="{{ route('lokasiawal') }}"><div class="back-button">&larr;</div></a>
        <h2>Jawa Timur</h2>
        <div class="grid">
            <a href="{{ route('gresik') }}"><button class="button">Gresik</button></a>
            <a href="{{ route('malang') }}"><button class="button">Malang</button></a>
            <a href="{{ route('surabaya')}}"><button class="button">Surabaya</button></a>
            <a href="{{ route('sidoarjo') }}"><button class="button">Sidoarjo</button></a>
            <a href="{{ route('pasuruan')}}"><button class="button">Pasuruan</button></a>
            <a href="{{ route('mojokerto') }}"><button class="button">Mojokerto</button></a>
            <a href="{{ route('blitar') }}"><button class="button">blitar</button></a>
            <a href="{{  route('jombang')}}"><button class="button">jombang</button></a>
            <a href="{{ route('kediri') }}"><button class="button">kediri</button></a>
            <a href="{{ route('ponorogo') }}"><button class="button">ponorogo</button></a>
            <a href="{{ route('banyuwangi') }}"><button class="button">banyuwangi</button></a>
            <a href="{{ route('bojonegoro') }}"><button class="button">bojonegoro</button></a>
            <a href="{{ route('bondowoso') }}"><button class="button">bondowoso</button></a>
            <a href="{{ route('jember') }}"><button class="button">jember</button></a>
            <a href="{{ route('lumajang') }}"><button class="button">lumajang</button></a>
            <a href="{{ route('madiun') }}"><button class="button">madiun</button></a>
            <a href="{{ route('magetan') }}"><button class="button">magetan</button></a>
            <a href="{{ route('nganjuk') }}"><button class="button">nganjuk</button></a>
            <a href="{{ route('ngawi') }}"><button class="button">ngawi</button></a>
            <a href="{{ route('pacitan') }}"><button class="button">pacitan</button></a>
            <a href="{{ route('pamekasan') }}"><button class="button">pamekasan</button></a>
            <a href="{{ route('probolinggo') }}"><button class="button">probolinggo</button></a>
            <a href="{{ route('sampang') }}"><button class="button">sampang</button></a>
            <a href="{{ route('situbondo') }}"><button class="button">situbondo</button></a>
            <a href="{{ route('trenggalek') }}"><button class="button">trenggalek</button></a>
            <a href="{{ route('ponorogok') }}"><button class="button">ponorogo</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
