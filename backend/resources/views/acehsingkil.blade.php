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
        <a href="{{ route('lokasiaceh') }}"><div class="back-button">&larr;</div></a>
                <h2>kabupaten aceh singkil</h2>
                <div class="grid">
                    <a href="#"><button class="button">singkil</button></a>
                    <a href="#"><button class="button">singkil utara</button></a>
                    <a href="{{ route('job') }}"><button class="button">kuala baru</button></a>
                    <a href="#"><button class="button">pulau banyak</button></a>
                    <a href="#"><button class="button">pulau banyak barat</button></a>
                    <a href="#"><button class="button">gunung meriah</button></a>
                    <a href="#"><button class="button">simpang kanan</button></a>
                    <a href="#"><button class="button">danau paris</button></a>
                    <a href="#"><button class="button">singkohor</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>