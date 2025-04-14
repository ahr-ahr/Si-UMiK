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
        <a href="{{ route('sumut') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Simalungun</h2>
        <div class="grid">
            <a href="#"><button class="button">Siantar</button></a>
            <a href="#"><button class="button">Bosar Maligas</button></a>
            <a href="#"><button class="button">Dolok Panribuan</button></a>
            <a href="#"><button class="button">Pematang Silima Huta</button></a>
            <a href="#"><button class="button">Gunung Malela</button></a>
            <a href="#"><button class="button">Huta Bayu Raja</button></a>
            <a href="#"><button class="button">Purba</button></a>
            <a href="#"><button class="button">Raya</button></a>
            <a href="#"><button class="button">Tiga Binanga</button></a>
            <a href="#"><button class="button">Jawa Maraja Bah Jambi</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
