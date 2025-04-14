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
                <h2>gorontalo</h2>
                <div class="grid">
                    <a href="{{ route('boalemo') }}"><button class="button">kabupaten boalemo</button></a>
                    <a href="{{ route('bonebolango') }}"><button class="button">kabupaten bone bolango</button></a>
                    <a href="{{ route('kabupatengorontalo') }}"><button class="button">kabupaten gorontalo</button></a>
                    <a href="{{ route('kabupatengorontaloutara') }}"><button class="button">kabupaten gorontalo utara</button></a>
                    <a href="{{ route('pohuwato') }}"><button class="button">kabupaten pohuwato</button></a>
                    <a href="{{ route('kotagorontalo') }}"><button class="button">kota gorontalo</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>