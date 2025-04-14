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
                <h2>kabupaten aceh tamiang</h2>
                <div class="grid">
                    <a href="#"><button class="button">karang baru</button></a>
                    <a href="#"><button class="button">kuala simpang</button></a>
                    <a href="{{ route('job') }}"><button class="button">manyak payed</button></a>
                    <a href="#"><button class="button">rantau</button></a>
                    <a href="#"><button class="button">seruway</button></a>
                    <a href="#"><button class="button">bendahara</button></a>
                    <a href="#"><button class="button">banda mulia</button></a>
                    <a href="#"><button class="button">sekrak</button></a>
                    <a href="#"><button class="button">tamiang hulu</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>