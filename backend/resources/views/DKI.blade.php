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
                <h2>DKI jakarta</h2>
                <div class="grid">
                    <a href="{{ route('jakartabarat') }}"><button class="button">kota jakarta barat</button></a>
                    <a href="{{ route('jakartapusat') }}"><button class="button">kota jakarta pusat</button></a>
                    <a href="{{ route('jakartaselatan') }}"><button class="button">kota jakarta selatan</button></a>
                    <a href="{{ route('jakartatimur') }}"><button class="button">kota jakarta timur</button></a>
                    <a href="{{ route('jakartautara') }}"><button class="button">kota jakarta utara</button></a>
                    <a href="{{ route('kepulauanseribu') }}"><button class="button">kepulauan seribu</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>