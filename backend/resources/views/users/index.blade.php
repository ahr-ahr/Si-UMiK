<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        /* Styling untuk sidebar */
        #sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: -250px; /* Sidebar awalnya tertutup */
            width: 250px;
            background-color: #343a40;
            color: white;
            transition: 0.3s;
        }

        #sidebar.show {
            left: 0; /* Sidebar terbuka */
        }

        #sidebar ul {
            padding: 20px;
            list-style: none;
        }

        #sidebar ul li {
            margin: 10px 0;
        }

        /* Styling untuk tombol toggle */
        #toggle-btn {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            background-color: #343a40;
            color: white;
            border: none;
            padding: 15px;
            font-size: 24px;
            cursor: pointer;
            border-radius: 50%;
            z-index: 9999;
            transition: left 0.3s;
        }

        /* Tombol toggle saat sidebar terbuka */
        #toggle-btn.right {
            left: 250px; /* Pindah ke kanan setelah sidebar terbuka */
        }

        /* Styling untuk logo dan avatar */
        .sidebar-logo {
            text-align: center;
            margin: 20px 0;
        }

        .sidebar-logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .user-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-info img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .user-info p {
            color: #fff;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <!-- Logo di bagian atas sidebar -->
        <div class="sidebar-logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </div>

        <!-- User Avatar dan Nama Pengguna -->
        <div class="user-info">
            <img src="{{ asset('storage/' . $user->foto_profil) }}" alt="User Avatar">
            <p>{{ $user->fullname }}</p> <!-- Nama pengguna bisa diganti sesuai data pengguna -->
        </div>

        <ul>
            <li><a href="#" class="text-white">Dashboard</a></li>
            <li><a href="#" class="text-white">Pengaturan</a></li>
            <li><a href="#" class="text-white">Profil</a></li>
            <li><a href="#" class="text-white">Logout</a></li>
        </ul>
    </div>

    <!-- Tombol toggle untuk sidebar dengan ikon Font Awesome -->
    <button id="toggle-btn"><i class="fas fa-chevron-right"></i></button>

    <div class="container mt-5">
        <h1>Dashboard User</h1>
        <!-- Konten tabel seperti sebelumnya -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto Profil</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status Akun</th>
                    <th>CV</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        @if ($user->foto_profil)
                            <img src="{{ asset('storage/' . $user->foto_profil) }}" alt="Foto Profil" width="80" height="80">
                        @else
                            <span>Tidak ada</span>
                        @endif
                    </td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->status_akun }}</td>
                    <td>
                        @if ($user->cv && $user->role === 'pencari_kerja')
                            <div style="width: 300px; height: 400px; overflow: auto; border: 1px solid #ccc;">
                                <embed src="{{ asset('storage/' . $user->cv) }}" type="application/pdf" width="100%" height="100%">
                            </div>
                            <br>
                            <a href="{{ asset('storage/' . $user->cv) }}" target="_blank">Download CV</a>
                        @else
                            <span>Tidak tersedia</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('/users/' . $user->id) }}">Lihat</a>
                        <a href="{{ url('/users/' . $user->id . '/edit') }}">Edit</a>

                        @if (!$user->hasVerifiedEmail())
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit">Kirim Ulang Link Verifikasi</button>
                            </form>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

        <br>
        <form method="POST" action="{{ url('/logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

    <!-- Link ke Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script>
        // Script untuk mengatur toggle sidebar
        const toggleBtn = document.getElementById('toggle-btn');
        const sidebar = document.getElementById('sidebar');

        let isSidebarOpen = false;

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('show');
            // Ganti ikon dan posisi tombol tergantung status sidebar
            if (isSidebarOpen) {
                toggleBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
                toggleBtn.classList.remove('right');
            } else {
                toggleBtn.innerHTML = '<i class="fas fa-times"></i>';
                toggleBtn.classList.add('right');
            }
            isSidebarOpen = !isSidebarOpen;
        });
    </script>
</body>
</html>
