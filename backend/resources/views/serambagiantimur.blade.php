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
        <a href="{{ route('maluku') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Seram Bagian Timur</h2>
        <div class="grid">
            <a href="#"><button class="button"> Bula</button></a>
            <a href="#"><button class="button"> Bula Barat</button></a>
            <a href="#"><button class="button"> Bula Timur</button></a>
            <a href="#"><button class="button"> Siwalalat</button></a>
            <a href="#"><button class="button"> Tehoru</button></a>
            <a href="#"><button class="button"> Kilmury</button></a>
            <a href="#"><button class="button"> Werinama</button></a>
            <a href="#"><button class="button"> Teluk Elpaputih</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
