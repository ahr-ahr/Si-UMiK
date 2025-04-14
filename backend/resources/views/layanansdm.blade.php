<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/sdm.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SDM</title>
</head>
<body>
    <div class="container">
        <div class="back">
            <a href="{{ route('layanan1') }}"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <h3 class="layanan"><b>SDM</h3>
        <div class="icon">
            <a href=""><i class="fa-solid fa-bell"></i></a>
            <a href=""><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <div class="pekerjaan">
      <div class="kerja">
        <button>
         <a href="{{ route('pekerja') }}"><h3>Temukan Pekerja</h3></a>
        </button>
      </div>
      <div class="lowongan">
        <button>
        <a href=""><h3>Temukan Lowongan</h3></a>
        </button>
      </div>
    </div>

</body>
</html>
