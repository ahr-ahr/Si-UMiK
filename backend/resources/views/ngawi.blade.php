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
        <a href="{{ route('lokasi') }}"><div class="back-button">&larr;</div></a>
                <h2>kabupaten ngawi</h2>
                <div class="grid">
                    <a href="#"><button class="button">bringin</button></a>
                    <a href="#"><button class="button">geneng</button></a>
                    <a href="{{ route('job') }}"><button class="button">gerih</button></a>
                    <a href="#"><button class="button">jogorojo</button></a>
                    <a href="#"><button class="button">karangjati</button></a>
                    <a href="#"><button class="button">karanganyar</button></a>
                    <a href="#"><button class="button">kedunggalar</button></a>
                    <a href="#"><button class="button">kendal</button></a>
                    <a href="#"><button class="button">kwadungan</button></a>
                    <a href="#"><button class="button">kasreman</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>