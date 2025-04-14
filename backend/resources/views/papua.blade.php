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
                <h2>provinsi papua</h2>
                <div class="grid">
                    <a href="{{ route('asmat') }}"><button class="button">kabupaten asmat</button></a>
                    <a href="{{ route('biaknumfor') }}"><button class="button">kabupaten biak numfor</button></a>
                    <a href="{{ route('bovendigoel') }}"><button class="button">kabupaten boven digoel</button></a>
                    <a href="{{ route('deiyai') }}"><button class="button">kabupaten deiyai</button></a>
                    <a href="{{ route('dogiyai') }}"><button class="button">kabupaten dogiyai</button></a>
                    <a href="{{ route('intanjaya') }}"><button class="button">kabupaten intan jaya</button></a>
                    <a href="{{ route('jayapura') }}"><button class="button">kabupaten jayapura</button></a>
                    <a href="{{ route('jayawijaya') }}"><button class="button">kabupaten jaya wijaya</button></a>
                    <a href="{{ route('keerom') }}"><button class="button">kabupaten keerom</button></a>
                    <a href="{{ route('kepulauanyapen') }}"><button class="button">kabupaten kepulauan yapen</button></a>
                    <a href="{{ route('lannyjaya') }}"><button class="button">kabupaten lanny jaya</button></a>
                    <a href="{{ route('mamberamoraya') }}"><button class="button">kabupaten mamberamo raya</button></a>
                    <a href="{{ route('mamberamotengah') }}"><button class="button">kabupaten mamberamo tengah</button></a>
                    <a href="{{ route('mappi') }}"><button class="button">kabupaten mappi</button></a>
                    <a href="{{ route('merauke') }}"><button class="button">kabupaten merauke</button></a>
                    <a href="{{ route('mimika') }}"><button class="button">kabupaten mimika</button></a>
                    <a href="{{ route('nabire') }}"><button class="button">kabupaten nabire</button></a>
                    <a href="{{ route('nduga') }}"><button class="button">kabupaten nduga</button></a>
                    <a href="{{ route('paniai') }}"><button class="button">kabupaten paniai</button></a>
                    <a href="{{ route('pegununganbintang') }}"><button class="button">kabupaten pegunungan bintang</button></a>
                    <a href="{{ route('puncak') }}"><button class="button">kabupaten puncak</button></a>
                    <a href="{{ route('puncakjaya') }}"><button class="button">kabupaten puncak jaya</button></a>
                    <a href="{{ route('sarmi') }}"><button class="button">kabupaten sarmi</button></a>
                    <a href="{{ route('supiori') }}"><button class="button">kabupaten supiori</button></a>
                    <a href="{{ route('tolikara') }}"><button class="button">kabupaten tolikara</button></a>
                    <a href="{{ route('waropen') }}"><button class="button">kabupaten waropen</button></a>
                    <a href="{{ route('yahukimo') }}"><button class="button">kabupaten yahukimo</button></a>
                    <a href="{{ route('yalimo') }}"><button class="button">kabupaten yalimo</button></a>
                    <a href="{{ route('jayapura') }}"><button class="button">kota jayapura</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>