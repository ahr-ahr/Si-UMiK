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
        <h2>Kabupaten Bone</h2>
        <div class="grid">
            <a href="#"><button class="button"> Tanete Riattang</button></a>
            <a href="#"><button class="button"> Kajuara</button></a>
            <a href="#"><button class="button"> Awangpone</button></a>
            <a href="#"><button class="button"> Sibulue</button></a>
            <a href="#"><button class="button"> Libureng</button></a>
            <a href="#"><button class="button"> Mare</button></a>
            <a href="#"><button class="button"> Tellu Limpoe</button></a>
            <a href="#"><button class="button"> Ulaweng</button></a>
            <a href="#"><button class="button"> Bontocani</button></a>
            <a href="#"><button class="button"> Bengo</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
