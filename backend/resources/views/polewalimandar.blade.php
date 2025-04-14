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
        <a href="{{ route('sulbar') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Polewali Mandar</h2>
        <div class="grid">
            <a href="#"><button class="button"> Polewali</button></a>
            <a href="#"><button class="button"> Binuang</button></a>
            <a href="#"><button class="button"> Wonomulyo</button></a>
            <a href="#"><button class="button"> Campalagian</button></a>
            <a href="#"><button class="button"> Matakali</button></a>
            <a href="#"><button class="button"> Alu</button></a>
            <a href="#"><button class="button"> Tapango</button></a>
            <a href="#"><button class="button"> Liwa</button></a>
            <a href="#"><button class="button"> Bababulu</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
