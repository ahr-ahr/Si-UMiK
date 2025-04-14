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
                <h2>Kabupaten Batubara</h2>
                <div class="grid">
                    <a href="#"><button class="button">Air Putih</button></a>
                    <a href="#"><button class="button">Datuk Tanah Datar</button></a>
                    <a href="{{ route('job') }}"><button class="button">Limapuluh</button></a>
                    <a href="#"><button class="button">Medang Deras</button></a>
                    <a href="#"><button class="button">Sei Suka</button></a>
                    <a href="#"><button class="button">Talawi</button></a>
                    <a href="#"><button class="button">Tanjung Tiram</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
