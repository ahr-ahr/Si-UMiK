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
                <h2>provinsi yogya istimewa</h2>
                <div class="grid">
                    <a href="{{ route('bantul') }}"><button class="button">kabupaten bantul</button></a>
                    <a href="{{ route('gunungkidul') }}"><button class="button">kabupaten gunung kidul</button></a>
                    <a href="{{ route('kulonporgo') }}"><button class="button">kabupaten kulon porgo</button></a>
                    <a href="{{ route('sleman') }}"><button class="button">kabupaten sleman</button></a>
                    <a href="{{ route('kotayogyakarta') }}"><button class="button">kota yogyakarta</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>