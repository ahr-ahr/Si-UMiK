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
                <h2>sulawesi utara</h2>
                <div class="grid">
                    <a href="{{ route('bolaangmongondow') }}"><button class="button">kabupaten bolaang mongondow</button></a>
                    <a href="{{ route('bolaangmongondowselatan') }}"><button class="button">kabupaten bolaang mongondow selatan</button></a>
                    <a href="{{ route('bolaangmongondowtimur') }}"><button class="button">kabupaten bolaang mongondow timur</button></a>
                    <a href="{{ route('bolaangmongondowutara') }}"><button class="button">kabupaten bolaang mongondow utara</button></a>
                    <a href="{{ route('kepulauansangihe') }}"><button class="button">kabupaten kepulauan sangihe</button></a>
                    <a href="{{ route('siautagulandangbiaro') }}"><button class="button">kepulauan siau tagulandang biaro</button></a>
                    <a href="{{ route('kepulauantalaud') }}"><button class="button">kabupaten kepulauan talaud</button></a>
                    <a href="{{ route('minahasa') }}"><button class="button">kabupaten minahasa</button></a>
                    <a href="{{ route('minahasaselatan') }}"><button class="button">kabupaten minahasa selatan</button></a>
                    <a href="{{ route('minahasatenggara') }}"><button class="button">kabupaten minahasa tenggara</button></a>
                    <a href="{{ route('minahasautara') }}"><button class="button">kabupaten minahasa utara</button></a>
                    <a href="{{ route('bitung') }}"><button class="button">kota bitung</button></a>
                    <a href="{{ route('kotamobugu') }}"><button class="button">kota kotamobugu</button></a>
                    <a href="{{ route('manado') }}"><button class="button">kota manado</button></a>
                    <a href="{{ route('tomohon') }}"><button class="button">kota tomohon</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>