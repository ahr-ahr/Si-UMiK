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
        <a href="{{ route('lokasi') }}"><div class="back-button">&larr;</div></a>
                <h2>kabupaten Malang</h2>
                <div class="grid">
                    <a href="#"><button class="button">Arjosari</button></a>
                    <a href="#"><button class="button">balearejosari</button></a>
                    <a href="{{ route('job') }}"><button class="button">Blimbing</button></a>
                    <a href="#"><button class="button">Bunulrejo</button></a>
                    <a href="#"><button class="button">Jodipan</button></a>
                    <a href="#"><button class="button">Kesatrian</button></a>
                    <a href="#"><button class="button">Pnadanwangi</button></a>
                    <a href="#"><button class="button">Polehan</button></a>
                    <a href="#"><button class="button">Kepanjen</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>