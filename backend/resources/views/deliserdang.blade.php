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
                <h2>Kabupaten Deli Serdang</h2>
                <div class="grid">
                    <a href="#"><button class="button">Beringin</button></a>
                    <a href="#"><button class="button">Batang Kuis</button></a>
                    <a href="{{ route('job') }}"><button class="button">Deli Serdang</button></a>
                    <a href="#"><button class="button">Hamparan Perak</button></a>
                    <a href="#"><button class="button">Lubuk Pakam</button></a>
                    <a href="#"><button class="button">Percut Sei Tuan</button></a>
                    <a href="#"><button class="button">Sunggal</button></a>
                    <a href="#"><button class="button">Tanjung Morawa</button></a>
                    <a href="#"><button class="button">Pagar Merbau</button></a>
                    <a href="#"><button class="button">Sibiru-biru</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
