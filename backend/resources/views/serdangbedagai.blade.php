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
        <h2>Kabupaten Serdang Bedagai</h2>
        <div class="grid">
            <a href="#"><button class="button">Sei Rampah</button></a>
            <a href="#"><button class="button">Perbaungan</button></a>
            <a href="#"><button class="button">Tebing Syahbandar</button></a>
            <a href="#"><button class="button">Bintang Bayu</button></a>
            <a href="#"><button class="button">Teluk Mengkudu</button></a>
            <a href="#"><button class="button">Kotarih</button></a>
            <a href="#"><button class="button">Serba Jadi</button></a>
            <a href="#"><button class="button">Pagar Merbau</button></a>
            <a href="#"><button class="button">Pantai Cermin</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
