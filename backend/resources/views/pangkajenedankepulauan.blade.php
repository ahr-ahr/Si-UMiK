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
        <a href="{{ route('sulasel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Pangkajene dan Kepulauan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Pangkajene</button></a>
            <a href="#"><button class="button"> Segeri</button></a>
            <a href="#"><button class="button"> Labakkang</button></a>
            <a href="#"><button class="button"> Bungoro</button></a>
            <a href="#"><button class="button"> Liukang Tangaya</button></a>
            <a href="#"><button class="button"> Liukang Kalmas</button></a>
            <a href="#"><button class="button"> Kajuara</button></a>
            <a href="#"><button class="button"> Tondong Tallasa</button></a>
            <a href="#"><button class="button"> Mattiro Bulu</button></a>
            <a href="#"><button class="button"> Kepulauan Sangkarrang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
