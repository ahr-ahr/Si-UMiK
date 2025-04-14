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
        <h2>Kabupaten Pinrang</h2>
        <div class="grid">
            <a href="#"><button class="button"> Pinrang</button></a>
            <a href="#"><button class="button"> Patampanua</button></a>
            <a href="#"><button class="button"> Mattiro Bulu</button></a>
            <a href="#"><button class="button"> Watang Sawitto</button></a>
            <a href="#"><button class="button"> Lembang</button></a>
            <a href="#"><button class="button"> Paleteang</button></a>
            <a href="#"><button class="button"> Duampanua</button></a>
            <a href="#"><button class="button"> Cempa</button></a>
            <a href="#"><button class="button"> Kupa</button></a>
            <a href="#"><button class="button"> Tupabbiring</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
