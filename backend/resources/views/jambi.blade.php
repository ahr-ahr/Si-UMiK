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
                <h2>provinsi jambi</h2>
                <div class="grid">
                    <a href="{{ route('batanghari') }}"><button class="button">kabupaten batanghari</button></a>
                    <a href="{{ route('bungo') }}"><button class="button">kabupaten bungo</button></a>
                    <a href="{{ route('kerinci') }}"><button class="button">kabupaten kerinci</button></a>
                    <a href="{{ route('merangin') }}"><button class="button">kabupaten merangin</button></a>
                    <a href="{{ route('muarojambi') }}"><button class="button">kabupaten muaro jambi</button></a>
                    <a href="{{ route('sarolangun') }}"><button class="button">kabupaten sarolangun</button></a>
                    <a href="{{ route('jabungbarat') }}"><button class="button">tanjung jabung barat</button></a>
                    <a href="{{ route('jabungtimur') }}"><button class="button">tanjung jabung timur</button></a>
                    <a href="{{ route('tebo') }}"><button class="button">kabupaten tebo</button></a>
                    <a href="{{ route('kotajambi') }}"><button class="button">kota jambi</button></a>
                    <a href="{{ route('sungaipenuh') }}"><button class="button">kota sungai penuh</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>