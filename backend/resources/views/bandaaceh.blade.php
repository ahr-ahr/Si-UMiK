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
        <a href="{{ route('lokasiaceh') }}"><div class="back-button">&larr;</div></a>
                <h2>kota banda aceh</h2>
                <div class="grid">
                    <a href="#"><button class="button">baiturrahman</button></a>
                    <a href="#"><button class="button">banda raya</button></a>
                    <a href="{{ route('job') }}"><button class="button">jaya baru</button></a>
                    <a href="#"><button class="button">kuta alam</button></a>
                    <a href="#"><button class="button">kuta raja</button></a>
                    <a href="#"><button class="button">lueng bata</button></a>
                    <a href="#"><button class="button">meuraxa</button></a>
                    <a href="#"><button class="button">syiah kuala</button></a>
                    <a href="#"><button class="button">ulee kareng</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>