<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Daerah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href={{ asset('css/lokasi2.css') }}>
</head>
<body>
    <div class="container">
        <a href="{{ route('lokasiawal') }}"><div class="back-button">&larr;</div></a>
                <h2>Jawa tengah</h2>
                <div class="grid">
                    <a href="{{ route('banjarnegara') }}"><button class="button">banjarnegara</button></a>
                    <a href="{{ route('banyumas') }}"><button class="button">banyumas</button></a>
                    <a href="{{ route('batang') }}"><button class="button">batang</button></a>
                    <a href="{{ route('blora') }}"><button class="button">blora</button></a>
                    <a href="{{ route('boyolali') }}"><button class="button">boyolali</button></a>
                    <a href="{{ route('brebes') }}"><button class="button">brebes</button></a>
                    <a href="{{ route('cilacap') }}"><button class="button">cilacap</button></a>
                    <a href="{{ route('demak') }}"><button class="button">demak</button></a>
                    <a href="{{ route('grobogan') }}"><button class="button">grobogan</button></a>
                    <a href="{{ route('jepara') }}"><button class="button">jepara</button></a>
                    <a href="{{ route('karanganyar') }}"><button class="button">karanganyar</button></a>
                    <a href="{{ route('kebumen') }}"><button class="button">kebumen</button></a>
                    <a href="{{ route('kendal') }}"><button class="button">kendal</button></a>
                    <a href="{{ route('klaten') }}"><button class="button">klaten</button></a>
                    <a href="{{ route('kudus') }}"><button class="button">kudus</button></a>
                    <a href="{{ route('magelang') }}"><button class="button">magelang</button></a>
                    <a href="{{ route('pati') }}"><button class="button">pati</button></a>
                    <a href="{{ route('pekalongan') }}"><button class="button">pekalongan</button></a>
                    <a href="{{ route('pemalang') }}"><button class="button">pemalang</button></a>
                    <a href="{{ route('purbalingga') }}"><button class="button">purbalingga</button></a>
                    <a href="{{ route('purworejo') }}"><button class="button">purworejo</button></a>
                    <a href="{{ route('rembang') }}"><button class="button">rembang</button></a>
                    <a href="{{ route('semarang') }}"><button class="button">semarang</button></a>
                    <a href="{{ route('sragen') }}"><button class="button">sragen</button></a>
                    <a href="{{ route('sukoharjo') }}"><button class="button">sukoharjo</button></a>
                    <a href="{{ route('tegal') }}"><button class="button">tegal</button></a>
                    <a href="{{ route('temanggung') }}"><button class="button">temanggung</button></a>
                    <a href="{{ route('wonogiri') }}"><button class="button">wonogiri</button></a>
                    <a href="{{ route('wonosobo') }}"><button class="button">wonosobo</button></a>
                    <a href="{{ route('salatiga') }}"><button class="button">salatiga</button></a>
                    <a href="{{ route('surakarta') }}"><button class="button">surakarta</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>