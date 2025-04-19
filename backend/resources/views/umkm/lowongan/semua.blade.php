<div class="container">
    <h1>Daftar Lowongan Saya</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($lowongan->count())
        <div class="table-responsive">
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Jenis</th>
                        <th>Lokasi</th>
                        <th>Tanggal Ditutup</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lowongan as $item)
                        <tr>
                            <td>{{ $item->judul }}</td>
                            <td>{{ ucfirst($item->jenis_pekerjaan) }}</td>
                            <td>{{ $item->lokasi_kerja }}</td>
                            <td>{{ $item->tanggal_ditutup ?? '-' }}</td>
                            <td>
                                <a href="{{ route('umkm.lowongan.show', $item->id) }}" class="btn btn-sm btn-primary">Lihat Detail</a>
                                <a href="{{ route('umkm.lowongan.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('umkm.lowongan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-muted mt-3">Belum ada lowongan kerja yang Anda buat.</p>
    @endif
</div>
