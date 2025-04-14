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
                <h2>provinsi lampung</h2>
                <div class="grid">
                    <a href="{{ route('lampungtengah') }}"><button class="button">kabupaten lampung tengah</button></a>
                    <a href="{{ route('lampungutara') }}"><button class="button">kabupaten lampung utara</button></a>
                    <a href="{{ route('lampungselatan') }}"><button class="button">kabupaten lampung selatan</button></a>
                    <a href="{{ route('lampungbarat') }}"><button class="button">kabupaten lampung barat</button></a>
                    <a href="{{ route('lampungtimur') }}"><button class="button">kabupaten lampung timur</button></a>
                    <a href="{{ route('mesuji') }}"><button class="button">kabupaten mesuji</button></a>
                    <a href="{{ route('pesawaran') }}"><button class="button">kabupaten pesawaran</button></a>
                    <a href="{{ route('pesisirbarat') }}"><button class="button">kabupaten pesisir barat</button></a>
                    <a href="{{ route('pringsewu') }}"><button class="button">kabupaten pringsewu</button></a>
                    <a href="{{ route('tulangbawang') }}"><button class="button">kabupaten tulang bawang</button></a>
                    <a href="{{ route('tulangbawangbarat') }}"><button class="button">kabupaten tulang bawang barat</button></a>
                    <a href="{{ route('tanggamus') }}"><button class="button">kabupaten tanggamus</button></a>
                    <a href="{{ route('waykanan') }}"><button class="button">kabupaten way kanan</button></a>
                    <a href="{{ route('bandarlampung') }}"><button class="button">kota bandar lampung</button></a>
                    <a href="{{ route('metro') }}"><button class="button">kota metro</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>