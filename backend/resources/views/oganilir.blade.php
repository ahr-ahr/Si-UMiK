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
        <a href="{{ route('sumaterasel') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Ogan Ilir</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Indralaya</button></a>
            <a href="#"><button class="button">Kecamatan Indralaya Utara</button></a>
            <a href="#"><button class="button">Kecamatan Indralaya Selatan</button></a>
            <a href="#"><button class="button">Kecamatan Tanjung Raja</button></a>
            <a href="#"><button class="button">Kecamatan Pemulutan</button></a>
            <a href="#"><button class="button">Kecamatan Pemulutan Barat</button></a>
            <a href="#"><button class="button">Kecamatan Rantau Alai</button></a>
            <a href="#"><button class="button">Kecamatan Payaraman</button></a>
            <a href="#"><button class="button">Kecamatan Muara Kuang</button></a>
            <a href="#"><button class="button">Kecamatan Sungai Pinang</button></a>
            <a href="#"><button class="button">Kecamatan Lubuk Keliat</button></a>
            <a href="#"><button class="button">Kecamatan Karang Dapo</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
