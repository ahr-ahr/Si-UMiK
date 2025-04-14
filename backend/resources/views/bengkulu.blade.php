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
                <h2>provinsi bengkulu</h2>
                <div class="grid">
                    <a href="{{ route('bengkuluselatan') }}"><button class="button">bengkulu selatan</button></a>
                    <a href="{{ route('bengkulutengah') }}"><button class="button">bengkulu tengah</button></a>
                    <a href="{{ route('bengkuluutara') }}"><button class="button">bengkulu utara</button></a>
                    <a href="{{ route('kaur') }}"><button class="button">kabupaten kaur</button></a>
                    <a href="{{ route('kepahiang') }}"><button class="button">kabupaten kepahiang</button></a>
                    <a href="{{ route('lebong') }}"><button class="button">kabupaten lebong</button></a>
                    <a href="{{ route('mukomuko') }}"><button class="button">kabupaten mukomuko</button></a>
                    <a href="{{ route('rejanglebong') }}"><button class="button">kabupaten rejang lebong</button></a>
                    <a href="{{ route('seluma') }}"><button class="button">kabupaten seluma</button></a>
                    <a href="{{ route('kotabengkulu') }}"><button class="button">kota bengkulu</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>