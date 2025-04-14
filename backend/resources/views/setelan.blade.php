<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setelan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="setelan.css">
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="nav flex-column bg-light p-3">
            <a href="{{ route('setel') }}" class="d-flex align-items-center mb-4 text-dark text-decoration-none" id="back-link">
                <i class="fa-solid fa-circle-arrow-left me-2"></i>
                <h3 class="setelan mb-0">Setelan</h3>
            </a>
            <a href="{{ route('setel') }}" class="d-flex align-items-center text-dark text-decoration-none mb-3 nav-link">
                <i class="fa-solid fa-user me-2"></i>
                <span class="profil">Profil</span>
            </a>
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none mb-3 nav-link">
                <i class="fa-solid fa-lock me-2"></i>
                <span class="password">Password</span>
            </a>
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none nav-link">
                <i class="fa-solid fa-bell me-2"></i>
                <span class="notif">Notifikasi</span>
            </a>
        </nav>

        <!-- Main Content -->
        <div class="container py-5 fade-in">
            <div class="text-center mb-4">
                <i class="fa-solid fa-user-tie fa-3x"></i>
            </div>
            <form action="#" method="POST">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="namaDepan" class="form-label">Nama Depan</label>
                        <input type="text" name="namaDepan" class="form-control" id="namaDepan" placeholder="Syahrul">
                    </div>
                    <div class="col-md-6">
                        <label for="namaBelakang" class="form-label">Nama Belakang</label>
                        <input type="text" name="namaBelakang" class="form-control" id="namaBelakang" placeholder="Rozak">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">No Telephone</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="+62 812345678">
                    </div>
                    <div class="col-md-6">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="tanggalLahir" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="lakiLaki" value="laki-laki">
                            <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="perempuan" value="perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-danger" id="submit-button">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
       document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-link');
    const backLink = document.getElementById('back-link');
    const submitButton = document.getElementById('submit-button');

    // Animate icons on hover
    navLinks.forEach(link => {
        link.addEventListener('mouseover', () => {
            const icon = link.querySelector('i');
            icon.classList.add('rotate');
        });
        link.addEventListener('mouseout', () => {
            const icon = link.querySelector('i');
            icon.classList.remove('rotate');
        });
    });

    // Smooth scroll back link
    backLink.addEventListener('click', (event) => {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Button animation on click
    submitButton.addEventListener('click', (event) => {
        event.preventDefault();
        submitButton.classList.add('btn-success');
        setTimeout(() => {
            submitButton.classList.remove('btn-success');
            alert('Data berhasil disimpan!');
        }, 300);
    });
});

    </script>
</body>

</html>
