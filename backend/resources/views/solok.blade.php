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
        <a href="{{ route('sumbar') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Solok</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan X Koto</button></a>
            <a href="#"><button class="button">Kecamatan Kubung</button></a>
            <a href="#"><button class="button">Kecamatan Junjung Sirih</button></a>
            <a href="#"><button class="button">Kecamatan Lembah Gumanti</button></a>
            <a href="#"><button class="button">Kecamatan Solok Selatan</button></a>
            <a href="#"><button class="button">Kecamatan Alahan Panjang</button></a>
            <a href="#"><button class="button">Kecamatan Tigo Lurah</button></a>
            <a href="#"><button class="button">Kecamatan Bukit Sundi</button></a>
            <a href="#"><button class="button">Kecamatan Danau Kembar</button></a>
            <a href="#"><button class="button">Kecamatan Payung Sekaki</button></a>
            <a href="#"><button class="button">Kecamatan Batang Barus</button></a>
            <a href="#"><button class="button">Kecamatan Tarusan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
