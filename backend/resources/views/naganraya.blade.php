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
                <h2>kabupaten naga raya</h2>
                <div class="grid">
                    <a href="#"><button class="button">beutong</button></a>
                    <a href="#"><button class="button">beutong ateuh banggalang</button></a>
                    <a href="{{ route('job') }}"><button class="button">darul makmur</button></a>
                    <a href="#"><button class="button">kuala</button></a>
                    <a href="#"><button class="button">kuala pesisir</button></a>
                    <a href="#"><button class="button">seungan</button></a>
                    <a href="#"><button class="button">seungan timur</button></a>
                    <a href="#"><button class="button">suka makmue</button></a>
                    <a href="#"><button class="button">tadu raya</button></a>
                    <a href="#"><button class="button">tripa makmur</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>