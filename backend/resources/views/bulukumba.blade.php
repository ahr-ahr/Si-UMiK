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
        <h2>Kabupaten Bulukumba</h2>
        <div class="grid">
            <a href="#"><button class="button"> Ujung Bulu</button></a>
            <a href="#"><button class="button"> Ujung Loe</button></a>
            <a href="#"><button class="button"> Bulukumpa</button></a>
            <a href="#"><button class="button"> Rilau Ale</button></a>
            <a href="#"><button class="button"> Gantarang</button></a>
            <a href="#"><button class="button"> Bonto Bahari</button></a>
            <a href="#"><button class="button"> Kajang</button></a>
            <a href="#"><button class="button"> Herlang</button></a>
            <a href="#"><button class="button"> Bontotiro</button></a>
            <a href="#"><button class="button"> Bonto Leang</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
