<!DOCTYPE html>
<html>
<head>
    <title>Tambah Konsultan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Tambah Konsultan</h1>

    <form action="{{ route('konsultan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>User Konsultan</label>
            <select name="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->fullname }} ({{ $user->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Bidang Keahlian</label>
            <input type="text" name="bidang_keahlian" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Pengalaman (tahun)</label>
            <input type="number" name="pengalaman_tahun" class="form-control">
        </div>

        <div class="mb-3">
            <label>Sertifikasi</label>
            <textarea name="sertifikasi" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Portofolio</label>
            <textarea name="portofolio" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Biaya per Jam (Rp)</label>
            <input type="number" name="biaya_per_jam" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Biaya per Menit (Rp)</label>
            <input type="number" name="biaya_per_menit" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
</body>
</html>
