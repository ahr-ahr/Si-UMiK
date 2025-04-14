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
                <h2>provinsi bangka belitung</h2>
                <div class="grid">
                    <a href="{{ route('bangka') }}"><button class="button">kabupaten bangka</button></a>
                    <a href="{{ route('bangkabarat') }}"><button class="button">kabupaten bangka barat</button></a>
                    <a href="{{ route('bangkaselatan') }}"><button class="button">kabupaten bangka selatan</button></a>
                    <a href="{{ route('bangkatengah') }}"><button class="button">kabupaten bangka tengah</button></a>
                    <a href="{{ route('belitung') }}"><button class="button">kabupaten belitung</button></a>
                    <a href="{{ route('belitungtimur') }}"><button class="button">kabupaten belitung timur</button></a>
                    <a href="{{ route('pangkalpinang') }}"><button class="button">kota pangkal pinang</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>