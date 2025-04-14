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
                <h2>kota ponorogo</h2>
                <div class="grid">
                    <a href="#"><button class="button">coper</button></a>
                    <a href="#"><button class="button">jetis</button></a>
                    <a href="{{ route('job') }}"><button class="button">josari</button></a>
                    <a href="#"><button class="button">karanggebang</button></a>
                    <a href="#"><button class="button">kradenan</button></a>
                    <a href="#"><button class="button">kutukulon</button></a>
                    <a href="#"><button class="button">kutuwetan</button></a>
                    <a href="#"><button class="button">mojorejo</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>