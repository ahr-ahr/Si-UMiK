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
                <h2>provinsi papua barat</h2>
                <div class="grid">
                    <a href="{{ route('fakfak') }}"><button class="button">kabupaten fakfak</button></a>
                    <a href="{{ route('kaimana') }}"><button class="button">kabupaten kaimana</button></a>
                    <a href="{{ route('manokwari') }}"><button class="button">kabupaten manokwari</button></a>
                    <a href="{{ route('manokwariselatan') }}"><button class="button">kabupaten manokwari selatan</button></a>
                    <a href="{{ route('maybrat') }}"><button class="button">kabupaten maybrat</button></a>
                    <a href="{{ route('pegununganarfak') }}"><button class="button">kabupaten pegunungan arfak</button></a>
                    <a href="{{ route('rajaampat') }}"><button class="button">kabupaten raja ampat</button></a>
                    <a href="{{ route('sorong') }}"><button class="button">kabupaten sorong</button></a>
                    <a href="{{ route('sorongselatan') }}"><button class="button">kabupaten sorong selatan</button></a>
                    <a href="{{ route('tambrauw') }}"><button class="button">kabupaten tambrauw</button></a>
                    <a href="{{ route('telukbintuni') }}"><button class="button">kabupaten teluk bintuni</button></a>
                    <a href="{{ route('telukwondama') }}"><button class="button">kabupaten teluk wondama</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>