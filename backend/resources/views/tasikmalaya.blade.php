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
            <a href="#"><button class="button">Cipedes</button></a>
            <a href="#"><button class="button">Indihiang</button></a>
            <a href="#"><button class="button">Kawalu</button></a>
            <a href="#"><button class="button">Mangkubumi</button></a>
            <a href="#"><button class="button">Purbaratu</button></a>
            <a href="#"><button class="button">Tawang</button></a>
            <a href="#"><button class="button">Cibereum</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
