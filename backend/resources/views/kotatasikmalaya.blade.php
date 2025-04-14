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
        <a href="{{ route('jawabarat') }}"><div class="back-button">&larr;</div></a>
        <h2>Kota Tasikmalaya</h2>
        <div class="grid">
            <a href="#"><button class="button">Cihideung</button></a>
            <a href="#"><button class="button">Indihiang</button></a>
            <a href="#"><button class="button">Mangkubumi</button></a>
            <a href="#"><button class="button">Purbaratu</button></a>
            <a href="#"><button class="button">Tamansari</button></a>
            <a href="#"><button class="button">Cisayong</button></a>
            <a href="#"><button class="button">Sukaresik</button></a>
            <a href="#"><button class="button">Bungursari</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
