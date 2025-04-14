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
                <h2>kabupaten magetan</h2>
                <div class="grid">
                    <a href="#"><button class="button">barat</button></a>
                    <a href="#"><button class="button">bendo</button></a>
                    <a href="{{ route('job') }}"><button class="button">karangrejo</button></a>
                    <a href="#"><button class="button">karas</button></a>
                    <a href="#"><button class="button">kartohajo</button></a>
                    <a href="#"><button class="button">kawedanan</button></a>
                    <a href="#"><button class="button">lembeyan</button></a>
                    <a href="#"><button class="button">magetan</button></a>
                    <a href="#"><button class="button">maospati</button></a>
                    <a href="#"><button class="button">ngariboyo</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>