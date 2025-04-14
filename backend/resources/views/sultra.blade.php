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
                <h2>sulawesi tenggara</h2>
                <div class="grid">
                    <a href="{{ route('bombana') }}"><button class="button">kabupaten bombana</button></a>
                    <a href="{{ route('buton') }}"><button class="button">kabupaten buton</button></a>
                    <a href="{{ route('butonselatan') }}"><button class="button">kabupaten buton selatan</button></a>
                    <a href="{{ route('butontengah') }}"><button class="button">kabupaten buton tengah</button></a>
                    <a href="{{ route('butonutara') }}"><button class="button">kabupaten buton utara</button></a>
                    <a href="{{ route('kolaka') }}"><button class="button">kabupaten kolaka</button></a>
                    <a href="{{ route('kolakatimur') }}"><button class="button">kabupaten kolaka timur</button></a>
                    <a href="{{ route('kolakautara') }}"><button class="button">kabupaten kolaka utara</button></a>
                    <a href="{{ route('konawe') }}"><button class="button">kabupaten konawe</button></a>
                    <a href="{{ route('konawekepulauan') }}"><button class="button">kabupaten konawe kepulauan</button></a>
                    <a href="{{ route('konaweselatan') }}"><button class="button">kabupaten konawe selatan</button></a>
                    <a href="{{ route('konaweutara') }}"><button class="button">kabupaten konawe utara</button></a>
                    <a href="{{ route('muna') }}"><button class="button">kabupaten muna</button></a>
                    <a href="{{ route('munabarat') }}"><button class="button">kabupaten muna barat</button></a>
                    <a href="{{ route('wakatobi') }}"><button class="button">kabupaten wakatobi</button></a>
                    <a href="{{ route('bau-bau') }}"><button class="button">kota bau-bau</button></a>
                    <a href="{{ route('kendari') }}"><button class="button">kota kendari</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>