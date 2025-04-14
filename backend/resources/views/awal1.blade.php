<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SI UMIK</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/home1.css') }}">
</head>

<body>
    <div class="img">

        <!-- Navbar -->
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <div class="masuk">
                    <a href="{{ route('profil') }}"><i class="fa-regular fa-circle-user"></i>
                        <p class="akun">Nama Akun</p>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Welcome Text -->
        <div class="text">
            <div class="welcome">
                <h4>Selamat Datang di</h4>
            </div>
            <div class="umkm">
                <h1>Layanan UMKM</h1>
            </div>
            <div class="lh-1">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo odit doloribus, ullam repudiandae vel harum incidunt itaque reprehenderit officiis iste nostrum consequuntur odio consequatur saepe non aperiam veritatis molestias ex.</p>
            </div>
               <a href="{{ route('layanan') }}"><button class="layanan">Temukan Layanan</button></a>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
