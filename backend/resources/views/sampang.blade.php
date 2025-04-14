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
                <h2>kota sampang</h2>
                <div class="grid">
                    <a href="#"><button class="button">banyuates</button></a>
                    <a href="#"><button class="button">camplong</button></a>
                    <a href="{{ route('job') }}"><button class="button">jrengik</button></a>
                    <a href="#"><button class="button">karangpenang</button></a>
                    <a href="#"><button class="button">kedundung</button></a>
                    <a href="#"><button class="button">katapang</button></a>
                    <a href="#"><button class="button">omben</button></a>
                    <a href="#"><button class="button">pangarengan</button></a>
                    <a href="#"><button class="button">robatal</button></a>
                    <a href="#"><button class="button">sampang</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>