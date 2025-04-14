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
                <h2>kabupaten lumajang</h2>
                <div class="grid">
                    <a href="#"><button class="button">ranuyoso</button></a>
                    <a href="#"><button class="button">klakah</button></a>
                    <a href="{{ route('job') }}"><button class="button">kedunglajang</button></a>
                    <a href="#"><button class="button">randuagung</button></a>
                    <a href="#"><button class="button">jatirojo</button></a>
                    <a href="#"><button class="button">rowokangkung</button></a>
                    <a href="#"><button class="button">yosowilangun</button></a>
                    <a href="#"><button class="button">tekung</button></a>
                    <a href="#"><button class="button">kunir</button></a>
                    <a href="#"><button class="button">tempeh</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>