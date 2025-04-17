<h2>📄 Daftar Lowongan Kerja</h2>

<a href="{{ route('umkm.lowongan.create') }}" class="btn btn-primary mb-3">+ Buat Lowongan Baru</a>

@if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

@if ($lowongan->isEmpty())
    <p>Belum ada lowongan kerja yang diposting.</p>
@else
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Lokasi</th>
                <th>Jenis</th>
                <th>Ditutup</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lowongan as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->lokasi_kerja }}</td>
                    <td>{{ ucfirst($item->jenis_pekerjaan) }}</td>
                    <td>{{ $item->tanggal_ditutup ?? '-' }}</td>
                    <td>
                        <a href="{{ route('umkm.lowongan.show', $item->id) }}">Lihat</a> |
                        <a href="{{ route('umkm.lowongan.edit', $item->id) }}">Edit</a> |
                        <form action="{{ route('umkm.lowongan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus lowongan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
