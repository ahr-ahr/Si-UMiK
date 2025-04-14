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
        <a href="{{ route('lokasi') }}"><div class="back-button">&larr;</div></a>
                <h2>kabupaten bondwoso</h2>
                <div class="grid">
                    <a href="#"><button class="button">binakal</button></a>
                    <a href="#"><button class="button">botolinggo</button></a>
                    <a href="{{ route('job') }}"><button class="button">cermee</button></a>
                    <a href="#"><button class="button">curahdami</button></a>
                    <a href="#"><button class="button">grujugan</button></a>
                    <a href="#"><button class="button">jambesari darus sholah</button></a>
                    <a href="#"><button class="button">klabang</button></a>
                    <a href="#"><button class="button">maesan</button></a>
                    <a href="#"><button class="button">pakem</button></a>
                    <a href="#"><button class="button">prajekan</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>