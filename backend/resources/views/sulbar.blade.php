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
                <h2>sulawesi barat</h2>
                <div class="grid">
                    <a href="{{ route('majene') }}"><button class="button">kabupaten majene</button></a>
                    <a href="{{ route('mamasa') }}"><button class="button">kabupaten mamasa</button></a>
                    <a href="{{ route('mamuju') }}"><button class="button">kabupaten mamuju</button></a>
                    <a href="{{ route('mamujutengah') }}"><button class="button">kabupaten mamuju tengah</button></a>
                    <a href="{{ route('mamujuutara') }}"><button class="button">kabupaten mamuju utara</button></a>
                    <a href="{{ route('polewalimandar') }}"><button class="button">kabupaten polewali mandar</button></a>
                    <a href="{{ route('kotamamuju') }}"><button class="button">kota mamuju</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>