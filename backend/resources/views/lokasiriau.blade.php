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
                <h2>provinsi riau</h2>
                <div class="grid">
                    <a href="{{ route('bangkalis') }}"><button class="button">kabupaten bengkalis</button></a>
                    <a href="{{ route('indrahilir') }}"><button class="button">kabupaten indragiri hilir</button></a>
                    <a href="{{ route('indrahulu') }}"><button class="button">kabupaten indragiri hulu</button></a>
                    <a href="{{ route('kampar') }}"><button class="button">kabupaten kampar</button></a>
                    <a href="{{ route('meranti') }}"><button class="button">kabupaten kepulauan meranti</button></a>
                    <a href="{{ route('singingi') }}"><button class="button">kabupaten kuantan singingi</button></a>
                    <a href="{{ route('pelalawan') }}"><button class="button">kabupaten pelalawan</button></a>
                    <a href="{{ route('rokanhilir') }}"><button class="button">kabupaten rokan hilir</button></a>
                    <a href="{{ route('rokanhulu') }}"><button class="button">kabupaten rokan hulu</button></a>
                    <a href="{{ route('siak') }}"><button class="button">kabupaten siak</button></a>
                    <a href="{{ route('dumai') }}"><button class="button">kabupaten dumai</button></a>
                    <a href="{{ route('pekanbaru') }}"><button class="button">kota pekan baru</button></a>
                    <a href="{{ route('lubuklinggau') }}"><button class="button">kota lubuklinggau</button></a>
                    <a href="{{ route('pagaralam') }}"><button class="button">kota pagar alam</button></a>
                    <a href="{{ route('palembang') }}"><button class="button">kota palembang</button></a>
                    <a href="{{ route('prabumulih') }}"><button class="button">kota prabumulih</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>