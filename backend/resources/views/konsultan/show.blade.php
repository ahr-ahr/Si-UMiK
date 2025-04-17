<!DOCTYPE html>
<html>
<head>
    <title>Daftar Konsultan</title>
    <style>
        .detail {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, opacity 0.5s ease;
            opacity: 0;
            margin-left: 20px;
        }

        .detail.show {
            max-height: 500px; /* cukup besar biar animasinya smooth */
            opacity: 1;
        }
    </style>
    <script>
        function toggleDetail(id) {
            const detailBox = document.getElementById('detail-' + id);
            detailBox.classList.toggle('show');
        }
    </script>
</head>
<body>
    <h1>Daftar Konsultan</h1>

    <form method="GET" action="{{ route('konsultan.index') }}">
        <input type="text" name="search" placeholder="Cari konsultan..." value="{{ $search }}">
        <button type="submit">Cari</button>
    </form>

    <ul>
        @foreach ($konsultans as $konsultan)
            <li>
                <a href="javascript:void(0);" onclick="toggleDetail({{ $konsultan->id }})">
                    {{ $konsultan->user->fullname }} - {{ $konsultan->bidang_keahlian }}
                </a>

                <div id="detail-{{ $konsultan->id }}" class="detail">
                    <p><strong>Pengalaman:</strong> {{ $konsultan->pengalaman_tahun }} tahun</p>
                    <p><strong>Sertifikasi:</strong> {{ $konsultan->sertifikasi }}</p>
                    <p><strong>Portofolio:</strong> {{ $konsultan->portofolio }}</p>
                    <p><strong>Biaya per Jam:</strong> Rp {{ number_format($konsultan->biaya_per_jam) }}</p>
                    <p><strong>Biaya per Menit:</strong> Rp {{ number_format($konsultan->biaya_per_menit) }}</p>
                    <p><strong>Rating:</strong> {{ $konsultan->rating ?? '-' }}</p>
                    <p><strong>Jumlah Review:</strong> {{ $konsultan->jumlah_review }}</p>
                    <p><strong>Jenis Konsultan:</strong> {{ $konsultan->jenis_konsultan }}</p>
                </div>
            </li>
        @endforeach
    </ul>

    {{ $konsultans->withQueryString()->links() }}
</body>
</html>
