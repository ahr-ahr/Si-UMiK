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
                <h2>kalimantan selatan</h2>
                <div class="grid">
                    <a href="{{ route('balangan') }}"><button class="button">kabupaten balangan</button></a>
                    <a href="{{ route('banjar') }}"><button class="button">kabupaten banjar</button></a>
                    <a href="{{ route('baritokuala') }}"><button class="button">kabupaten barito kuala</button></a>
                    <a href="{{ route('hulusungaiselatan') }}"><button class="button">kabupaten hulu sungai selatan</button></a>
                    <a href="{{ route('hulusungaitengah') }}"><button class="button">kabupaten hulu sungai tengah</button></a>
                    <a href="{{ route('hulusungaiutara') }}"><button class="button">kabupaten hulu sungai utara</button></a>
                    <a href="{{ route('kotabaru') }}"><button class="button">kabupaten kota baru</button></a>
                    <a href="{{ route('tabalog') }}"><button class="button">kabupaten tabalog</button></a>
                    <a href="{{ route('tanahbumbu') }}"><button class="button">kabupaten tanah bumbu</button></a>
                    <a href="{{ route('tanahlaut') }}"><button class="button">kabupaten tanah laut</button></a>
                    <a href="{{ route('tapin') }}"><button class="button">kabupaten tapin</button></a>
                    <a href="{{ route('banjarbaru') }}"><button class="button">kota banjarbaru</button></a>
                    <a href="{{ route('banjarmasin') }}"><button class="button">kota banjarmasin</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>