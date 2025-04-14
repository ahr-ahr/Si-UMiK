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
        <a href="{{ route('kalbar') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Mempawah</h2>
        <div class="grid">
            <a href="#"><button class="button"> Mempawah Hilir</button></a>
            <a href="#"><button class="button"> Mempawah Timur</button></a>
            <a href="#"><button class="button"> Mempawah Barat</button></a>
            <a href="#"><button class="button"> Sungai Pinyuh</button></a>
            <a href="#"><button class="button"> Anjongan</button></a>
            <a href="#"><button class="button"> Segedong</button></a>
            <a href="#"><button class="button"> Toho</button></a>
            <a href="#"><button class="button"> Siantan</button></a>
            <a href="#"><button class="button"> Sadaniang</button></a>
            <a href="#"><button class="button"> Kubu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
