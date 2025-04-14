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
                <h2>Kecamatan Asahan</h2>
                <div class="grid">
                    <a href="#"><button class="button">Air Joman</button></a>
                    <a href="#"><button class="button">Bandar Pasir Mandoge</button></a>
                    <a href="{{ route('job') }}"><button class="button">Buntu Pane</button></a>
                    <a href="#"><button class="button">Kisaran Barat</button></a>
                    <a href="#"><button class="button">Kisaran Timur</button></a>
                    <a href="#"><button class="button">Meranti</button></a>
                    <a href="#"><button class="button">Pulau Rakyat</button></a>
                    <a href="#"><button class="button">Rahuning</button></a>
                    <a href="#"><button class="button">Sei Dadap</button></a>
                    <a href="#"><button class="button">Tanjung Balai</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
