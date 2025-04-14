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
                <h2>provinsi bali</h2>
                <div class="grid">
                    <a href="{{ route('badug') }}"><button class="button">kabupaten badug</button></a>
                    <a href="{{ route('bangli') }}"><button class="button">kabupaten bangli</button></a>
                    <a href="{{ route('buleleg') }}"><button class="button">kabupaten buleleg</button></a>
                    <a href="{{ route('gianyar') }}"><button class="button">kabupaten gianyar</button></a>
                    <a href="{{ route('jembrana') }}"><button class="button">kabupaten jembrana</button></a>
                    <a href="{{ route('karangasem') }}"><button class="button">kabupaten karangasem</button></a>
                    <a href="{{ route('klungkung') }}"><button class="button">kabupaten klungkung</button></a>
                    <a href="{{ route('tabanan') }}"><button class="button">kabupaten tabanan</button></a>
                    <a href="{{ route('denpasar') }}"><button class="button">kota denpasar</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>