<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character encoding, viewport, and compatibility -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link to the external CSS -->
    <link rel="stylesheet" href={{ asset('css/profile.css') }}>

    <!-- Title of the page -->
    <title>Layanan</title>
</head>

<body>
    <div class="container">
        <!-- Back button with icon -->
        <div class="back">
            <a href={{ route('desain') }}><i class="fa-solid fa-arrow-left"></i></a>
        </div>

        <!-- Title for the section -->
        <h3 class="layanan">Profile</h3>

        <!-- Navigation icons for clock and user -->
        <div class="icon">
            <a href="#"><i class="fa-regular fa-clock"></i></a>
            <a href="#"><i class="fa-regular fa-user"></i></a>
        </div>

         <!-- Content Section -->
         <div class="content-section">
        <!-- Section containing profile image and content -->
        <div class="content-container">
            <!-- Image Section -->
            <div class="image-section">
                <img alt="Portrait of Katarina Astrid, a professional consultant, smiling and wearing a black blazer" height="400" src={{ asset('img/ladies.png') }} width="300" />
            </div>
                <h1>Katarina Astrid</h1>
                <h2>Konsultan Manajemen dan Strategi</h2>

                <!-- Stats for feedback and experience -->
                <div class="stats">
                    <span>
                        <i class="fas fa-thumbs-up"></i> 90%
                    </span>
                    <span>
                        <i class="fas fa-camera"></i> 10 Tahun
                    </span>
                </div>

                <!-- Price section -->
                <div class="price">
                  <a href={{ route('pembayarandesain') }}> <button class="mamat"> Mulai Dari <p class="harga">Rp250.000</p></button></a>
                </div>

                <!-- Description of the service -->
                <div class="description">
                    <h3>Deskripsi</h3>
                    <p>
                        menerima jasa pembuatan website dan desain figma <br>termasuk faktor internal dan eksternal yang memengaruhi kinerja bisnis. <br>membantu perusahaan merumuskan tujuan jangka panjang, visi, dan misi yang sesuai dengan tujuan bisnis.
                    </p>
                </div>

                <!-- Chat button for interaction -->
                <a class="chat-button" href="http://localhost:8000/chatify">
                    CHAT
                </a>
            </div>
        </div>
    </div>
</body>

</html>
