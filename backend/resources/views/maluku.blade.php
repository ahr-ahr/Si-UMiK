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
                <h2>provinsi maluku</h2>
                <div class="grid">
                    <a href="{{ route('buru') }}"><button class="button">kabupaten buru</button></a>
                    <a href="{{ route('buruselatan') }}"><button class="button">kabupaten buru selatan</button></a>
                    <a href="{{ route('kepulauanaru') }}"><button class="button">kabupaten kepulauan aru</button></a>
                    <a href="{{ route('malukubaratdaya') }}"><button class="button">kabupaten maluku barat daya</button></a>
                    <a href="{{ route('malukutengah') }}"><button class="button">kabupaten maluku tengah</button></a>
                    <a href="{{ route('malukutenggara') }}"><button class="button">kabupaten maluku tenggara</button></a>
                    <a href="{{ route('malukutenggarabarat') }}"><button class="button">kabupaten maluku tenggara barat</button></a>
                    <a href="{{ route('serambagianbarat') }}"><button class="button">kabupaten seram bagian barat</button></a>
                    <a href="{{ route('serambagiantimur') }}"><button class="button">kabupaten seram bagian timur</button></a>
                    <a href="{{ route('ambon') }}"><button class="button">kota ambon</button></a>
                    <a href="{{ route('tual') }}"><button class="button">kota tual</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>