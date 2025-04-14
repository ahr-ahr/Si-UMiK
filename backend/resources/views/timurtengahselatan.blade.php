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
        <a href="{{ route('NTT') }}"><div class="back-button">&larr;</div></a> 
        <h2>Kabupaten Timor Tengah Selatan</h2>
        <div class="grid">
            <a href="#"><button class="button"> Kota Soe</button></a>
            <a href="#"><button class="button"> Amanuban Selatan</button></a>
            <a href="#"><button class="button"> Amanuban Tengah</button></a>
            <a href="#"><button class="button"> Amanuban Utara</button></a>
            <a href="#"><button class="button"> Kualin</button></a>
            <a href="#"><button class="button"> Fatumnasi</button></a>
            <a href="#"><button class="button"> Toianas</button></a>
            <a href="#"><button class="button"> Biboki Anleu</button></a>
            <a href="#"><button class="button"> Miomaffo Selatan</button></a>
            <a href="#"><button class="button"> Miomaffo Utara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
