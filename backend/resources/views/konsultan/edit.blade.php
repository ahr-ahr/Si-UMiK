<!DOCTYPE html>
<html>
<head>
    <title>Edit Konsultan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Edit Konsultan</h1>

    <form action="{{ route('konsultan.update', $konsultan->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>User Konsultan</label>
            <select name="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $konsultan->user_id ? 'selected' : '' }}>
                        {{ $user->fullname }} ({{ $user->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Bidang Keahlian</label>
            <input type="text" name="bidang_keahlian" class="form-control" value="{{ $konsultan->bidang_keahlian }}" required>
        </div>

        <div class="mb-3">
            <label>Pengalaman (tahun)</label>
            <input type="number" name="pengalaman_tahun" class="form-control" value="{{ $konsultan->pengalaman_tahun }}">
        </div>

        <div class="mb-3">
            <label>Sertifikasi</label>
            <textarea name="sertifikasi" class="form-control">{{ $konsultan->sertifikasi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Portofolio</label>
            <textarea name="portofolio" class="form-control">{{ $konsultan->portofolio }}</textarea>
        </div>

        <div class="mb-3">
            <label>Biaya per Jam (Rp)</label>
            <input type="number" name="biaya_per_jam" class="form-control" value="{{ $konsultan->biaya_per_jam }}" required>
        </div>

        <div class="mb-3">
            <label>Biaya per Menit (Rp)</label>
            <input type="number" name="biaya_per_menit" class="form-control" value="{{ $konsultan->biaya_per_menit }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
