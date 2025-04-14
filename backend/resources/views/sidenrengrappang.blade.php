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
        <h2>Kabupaten Sidenreng Rappang</h2>
        <div class="grid">
            <a href="#"><button class="button"> Watang Sidenreng</button></a>
            <a href="#"><button class="button"> Pancaraji</button></a>
            <a href="#"><button class="button"> Citta</button></a>
            <a href="#"><button class="button"> Duampanua</button></a>
            <a href="#"><button class="button"> Lalan</button></a>
            <a href="#"><button class="button"> Tellu Limpoe</button></a>
            <a href="#"><button class="button"> Bonggakaradeng</button></a>
            <a href="#"><button class="button"> Sidenreng</button></a>
            <a href="#"><button class="button"> Baranti</button></a>
            <a href="#"><button class="button"> Mattiro Bulu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
