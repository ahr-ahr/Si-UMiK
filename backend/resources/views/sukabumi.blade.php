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
        <h2>Kota Sukabumi</h2>
        <div class="grid">
            <a href="#"><button class="button">Cikole</button></a>
            <a href="#"><button class="button">Citamiang</button></a>
            <a href="#"><button class="button">Cikembar</button></a>
            <a href="#"><button class="button">Gunungpuyuh</button></a>
            <a href="#"><button class="button">Lembursitu</button></a>
            <a href="#"><button class="button">Baros</button></a>
            <a href="#"><button class="button">Sukaraja</button></a>
            <a href="#"><button class="button">Sukarame</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
