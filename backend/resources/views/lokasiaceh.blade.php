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
                <h2>provinsi aceh</h2>
                <div class="grid">
                    <a href="{{ route('acehbarat') }}"><button class="button">aceh barat</button></a>
                    <a href="{{ route('acehbaratdaya') }}"><button class="button">aceh barat daya</button></a>
                    <a href="{{ route('acehbesar') }}"><button class="button">aceh besar</button></a>
                    <a href="{{ route('acehjaya') }}"><button class="button">aceh jaya</button></a>
                    <a href="{{ route('acehselatan') }}"><button class="button">aceh selatan</button></a>
                    <a href="{{ route('acehsingkil') }}"><button class="button">aceh singkil</button></a>
                    <a href="{{ route('acehtamiang') }}"><button class="button">aceh tamiang</button></a>
                    <a href="{{ route('acehtengah') }}"><button class="button">aceh tengah</button></a>
                    <a href="{{ route('acehtenggara') }}"><button class="button">aceh tenggara</button></a>
                    <a href="{{ route('acehtimur') }}"><button class="button">aceh timur</button></a>
                    <a href="{{ route('acehutara') }}"><button class="button">aceh utara</button></a>
                    <a href="{{ route('benermeriah') }}"><button class="button">kabupaten bener meriah</button></a>
                    <a href="{{ route('bireuen') }}"><button class="button">kabupaten bireuen</button></a>
                    <a href="{{ route('gayolues') }}"><button class="button">kabupaten gayo lues</button></a>
                    <a href="{{ route('naganraya') }}"><button class="button">kabupaten nagan raya</button></a>
                    <a href="{{ route('pidie') }}"><button class="button">kabupaten pidie</button></a>
                    <a href="{{ route('pidiejaya') }}"><button class="button">kabupaten pide jaya</button></a>
                    <a href="{{ route('simeule') }}"><button class="button">kabupaten simeule</button></a>
                    <a href="{{ route('bandaaceh') }}"><button class="button">kota banda aceh</button></a>
                    <a href="{{ route('kotalangsa') }}"><button class="button">kota langsa</button></a>
                    <a href="{{ route('lhokseumawe') }}"><button class="button">kota lhokseumawe</button></a>
                    <a href="{{ route('kotasabang') }}"><button class="button">kota sabang</button></a>
                    <a href="{{ route('subussalam') }}"><button class="button">kota subulussalam</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>