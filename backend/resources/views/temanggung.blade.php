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
        <a href="{{ route('jawatengah') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Temanggung</h2>
        <div class="grid">
            <a href="#"><button class="button">Temanggung</button></a>
            <a href="#"><button class="button">Parakan</button></a>
            <a href="#"><button class="button">Kedu</button></a>
            <a href="#"><button class="button">Ngadirejo</button></a>
            <a href="#"><button class="button">Tretep</button></a>
            <a href="#"><button class="button">Jumo</button></a>
            <a href="#"><button class="button">Bulu</button></a>
            <a href="#"><button class="button">Bejen</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
