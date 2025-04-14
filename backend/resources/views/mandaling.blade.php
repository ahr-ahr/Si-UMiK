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
        <a href="{{ route('sumut') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Mandailing Natal</h2>
        <div class="grid">
            <a href="#"><button class="button">Batahan</button></a>
            <a href="#"><button class="button">Batang Natal</button></a>
            <a href="#"><button class="button">Bukit Malintang</button></a>
            <a href="#"><button class="button">Huta Bargot</button></a>
            <a href="#"><button class="button">Kotanopan</button></a>
            <a href="#"><button class="button">Lembah Sorik Marapi</button></a>
            <a href="#"><button class="button">Muara Batang Gadis</button></a>
            <a href="#"><button class="button">Muara Sipongi</button></a>
            <a href="#"><button class="button">Natal</button></a>
            <a href="#"><button class="button">Panyabungan</button></a>
            <a href="#"><button class="button">Panyabungan Barat</button></a>
            <a href="#"><button class="button">Panyabungan Timur</button></a>
            <a href="#"><button class="button">Panyabungan Selatan</button></a>
            <a href="#"><button class="button">Panyabungan Utara</button></a>
            <a href="#"><button class="button">Siabu</button></a>
            <a href="#"><button class="button">Tambangan</button></a>
            <a href="#"><button class="button">Ulu Pungkut</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
