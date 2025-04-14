<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Daerah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/lokasi.css') }}">
</head>
<body>

    <div class="container">
        <a href="{{ route('lokasiriau') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Pelalawan</h2>
        <div class="grid">
            <a href="#"><button class="button">Kecamatan Pangkalan Kerinci</button></a>
            <a href="#"><button class="button">Kecamatan Pelalawan</button></a>
            <a href="#"><button class="button">Kecamatan Bunut</button></a>
            <a href="#"><button class="button">Kecamatan Langgam</button></a>
            <a href="#"><button class="button">Kecamatan Pangkalan Kuras</button></a>
            <a href="#"><button class="button">Kecamatan Ukui</button></a>
            <a href="#"><button class="button">Kecamatan Kuala Kampar</button></a>
            <a href="#"><button class="button">Kecamatan Bandar Seikijang</button></a>
            <a href="#"><button class="button">Kecamatan Kerumutan</button></a>
        </div>
        <div class="profile">
            <a href="{{ asset('profile.icon') }}"><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/lokasi.js') }}"></script>
</body>
</html>
