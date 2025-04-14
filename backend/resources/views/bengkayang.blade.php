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
        <h2>Kabupaten Bengkayang</h2>
        <div class="grid">
            <a href="#"><button class="button"> Bengkayang</button></a>
            <a href="#"><button class="button"> Sanggau Ledo</button></a>
            <a href="#"><button class="button"> Seluas</button></a>
            <a href="#"><button class="button"> Lumar</button></a>
            <a href="#"><button class="button"> Monterado</button></a>
            <a href="#"><button class="button"> Teriak</button></a>
            <a href="#"><button class="button"> Jagoi Babang</button></a>
            <a href="#"><button class="button"> Sungai Raya</button></a>
            <a href="#"><button class="button"> Samalantan</button></a>
            <a href="#"><button class="button"> Seberida</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
