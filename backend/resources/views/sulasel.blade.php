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
                <h2>sulawesi selatan</h2>
                <div class="grid">
                    <a href="{{ route('bantaeng') }}"><button class="button">kabupaten bantaeng</button></a>
                    <a href="{{ route('barru') }}"><button class="button">kabupaten barru</button></a>
                    <a href="{{ route('bone') }}"><button class="button">kabupaten bone</button></a>
                    <a href="{{ route('bulukumba') }}"><button class="button">kabupaten bulukumba</button></a>
                    <a href="{{ route('enrekang') }}"><button class="button">kabupaten enrekang</button></a>
                    <a href="{{ route('gowa') }}"><button class="button">kabupaten gowa</button></a>
                    <a href="{{ route('jeneponto') }}"><button class="button">kabupaten jeneponto</button></a>
                    <a href="{{ route('kepulauanselayar') }}"><button class="button">kabupaten kepulauan selayar</button></a>
                    <a href="{{ route('luwu') }}"><button class="button">kabupaten luwu</button></a>
                    <a href="{{ route('luwutimur') }}"><button class="button">kabupaten luwu timur</button></a>
                    <a href="{{ route('luwuutara') }}"><button class="button">kota luwu utara</button></a>
                    <a href="{{ route('maros') }}"><button class="button">kabupaten maros</button></a>
                    <a href="{{ route('pangkajenedankepulauan') }}"><button class="button">kabupaten pangkajene dan kepulauan</button></a>
                    <a href="{{ route('pinrang') }}"><button class="button">kabupaten pinrang</button></a>
                    <a href="{{ route('sidenrengrappang') }}"><button class="button">kabupaten sidenreng rappang</button></a>
                    <a href="{{ route('sinjai') }}"><button class="button">kabupaten sinjai</button></a>
                    <a href="{{ route('soppeng') }}"><button class="button">kabupaten soppeng</button></a>
                    <a href="{{ route('takalar') }}"><button class="button">kabupaten takalar</button></a>
                    <a href="{{ route('tanatoraja') }}"><button class="button">kabupaten tana toraja</button></a>
                    <a href="{{ route('wajo') }}"><button class="button">kabupaten wajo</button></a>
                    <a href="{{ route('makasar') }}"><button class="button">kota makasar</button></a>
                    <a href="{{ route('palopo') }}"><button class="button">kota palopo</button></a>
                    <a href="{{ route('parepare') }}"><button class="button">kota parepare</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>