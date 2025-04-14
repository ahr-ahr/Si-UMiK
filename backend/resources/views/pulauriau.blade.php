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
                <h2>kepulauan riau</h2>
                <div class="grid">
                    <a href="{{ route('bintan') }}"><button class="button">kabupaten bintan</button></a>
                    <a href="{{ route('karimum') }}"><button class="button">kabupaten karimun</button></a>
                    <a href="{{ route('anmbas') }}"><button class="button">kepulauan anambas</button></a>
                    <a href="{{ route('lingga') }}"><button class="button">kabupaten lingga</button></a>
                    <a href="{{ route('natuna') }}"><button class="button">kabupaten natuna</button></a>
                    <a href="{{ route('batam') }}"><button class="button">kabupaten batam</button></a>
                    <a href="{{ route('tanjuungpinang') }}"><button class="button">kota tanjung pinang</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>