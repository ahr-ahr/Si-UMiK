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
                <h2>kabupaten situbondo</h2>
                <div class="grid">
                    <a href="#"><button class="button">balung</button></a>
                    <a href="#"><button class="button">bugeman</button></a>
                    <a href="{{ route('job') }}"><button class="button">kendit</button></a>
                    <a href="#"><button class="button">kaltakan</button></a>
                    <a href="#"><button class="button">kukusan</button></a>
                    <a href="#"><button class="button">rajekwesi</button></a>
                    <a href="#"><button class="button">tambak ukir</button></a>
                    <a href="#"><button class="button">arjasa</button></a>
                    <a href="#"><button class="button">asembagus</button></a>
                    <a href="#"><button class="button">banyuglugur</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>