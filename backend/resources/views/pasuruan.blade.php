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
                <h2>kabupaten Pasuruan</h2>
                <div class="grid">
                    <a href="#"><button class="button">Bnagil</button></a>
                    <a href="#"><button class="button">Kraton</button></a>
                    <a href="{{ route('job') }}"><button class="button">Rejoso</button></a>
                    <a href="#"><button class="button">Lekok</button></a>
                    <a href="#"><button class="button">Nguling</button></a>
                    <a href="#"><button class="button">Gempol</button></a>
                    <a href="#"><button class="button">Beji</button></a>
                    <a href="#"><button class="button">Prigen</button></a>
                    <a href="#"><button class="button">Purwosari</button></a>
                    <a href="#"><button class="button">Purwodadi</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>