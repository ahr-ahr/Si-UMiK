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
        <a href="{{ route('lokasiawal') }}"><div class="back-button">&larr;</div></a>
                <h2>kalimantan utara</h2>
                <div class="grid">
                    <a href="{{ route('bulungan') }}"><button class="button">kabupaten bulungan</button></a>
                    <a href="{{ route('malinau') }}"><button class="button">kabupaten malinau</button></a>
                    <a href="{{ route('nunukan') }}"><button class="button">kabupaten nunukan</button></a>
                    <a href="{{ route('tanatidung') }}"><button class="button">kabupaten tana tidung</button></a>
                    <a href="{{ route('tarakan') }}"><button class="button">kota tarakan</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>