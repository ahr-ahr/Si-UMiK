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
                <h2>Nusa Tenggara Timur</h2>
                <div class="grid">
                    <a href="{{ route('alor') }}"><button class="button">kabupaten alor</button></a>
                    <a href="{{ route('belu') }}"><button class="button">kabupaten belu</button></a>
                    <a href="{{ route('ende') }}"><button class="button">kabupaten ende</button></a>
                    <a href="{{ route('florestimur') }}"><button class="button">kabupaten flores timur</button></a>
                    <a href="{{ route('kupang') }}"><button class="button">kabupaten kupang</button></a>
                    <a href="{{ route('lembata') }}"><button class="button">kabupaten lembata</button></a>
                    <a href="{{ route('malaka') }}"><button class="button">kabupaten malaka</button></a>
                    <a href="{{ route('manggarai') }}"><button class="button">kabupaten manggarai</button></a>
                    <a href="{{ route('manggaraibarat') }}"><button class="button">kabupaten manggarai barat</button></a>
                    <a href="{{ route('manggaraitimur') }}"><button class="button">kabupaten manggarai timur</button></a>
                    <a href="{{ route('ngada') }}"><button class="button">kabupaten ngada</button></a>
                    <a href="{{ route('nagekeo') }}"><button class="button">kabupaten nagekeo</button></a>
                    <a href="{{ route('rotendao') }}"><button class="button">kabupaten rote ndao</button></a>
                    <a href="{{ route('saburaijoa') }}"><button class="button">kabupaten sabu raijoa</button></a>
                    <a href="{{ route('sikka') }}"><button class="button">kabupaten sikka</button></a>
                    <a href="{{ route('sumbabarat') }}"><button class="button">kabupaten sumba barat</button></a>
                    <a href="{{ route('sumbatengah') }}"><button class="button">kabupaten sumba tengah</button></a>
                    <a href="{{ route('sumbatimur') }}"><button class="button">kabupaten sumba timur</button></a>
                    <a href="{{ route('timortengahselatan') }}"><button class="button">kabupaten timor tengah selatan</button></a>
                    <a href="{{ route('timortengahutara') }}"><button class="button">kabupaten timor tengah utara </button></a>
                    <a href="{{ route('kotakupang') }}"><button class="button">kota kupang</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>