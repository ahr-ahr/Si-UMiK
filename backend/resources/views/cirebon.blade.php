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
        <h2>Kota Cirebon</h2>
        <div class="grid">
            <a href="#"><button class="button">Kei Cirebon</button></a>
            <a href="#"><button class="button">Harjamukti</button></a>
            <a href="#"><button class="button">Sumber</button></a>
            <a href="#"><button class="button">Kaliwulu</button></a>
            <a href="#"><button class="button">Bubul</button></a>
            <a href="#"><button class="button">Pangebon</button></a>
            <a href="#"><button class="button">Sinden</button></a>
            <a href="#"><button class="button">Jembe</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
