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
                <h2>provinsi banten</h2>
                <div class="grid">
                    <a href="{{ route('lebak') }}"><button class="button">kabupaten lebak</button></a>
                    <a href="{{ route('pandeglang') }}"><button class="button">kabupaten pandeglang</button></a>
                    <a href="{{ route('serang') }}"><button class="button">kabupaten serang</button></a>
                    <a href="{{ route('tangerang') }}"><button class="button">kabupaten tangerang</button></a>
                    <a href="{{ route('cilegon') }}"><button class="button">kota cilegon</button></a>
                    <a href="{{ route('kotaserang') }}"><button class="button">kota serang</button></a>
                    <a href="{{ route('kotatangerang') }}"><button class="button">kota tangerang</button></a>
                    <a href="{{ route('tangerangselatan') }}"><button class="button">kota tangerang selatan</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>