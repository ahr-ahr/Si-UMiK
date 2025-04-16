
   
<div class="container">
    <h2>Buat Lowongan Kerja</h2>
    <form action="{{ route('umkm.lowongan.store') }}" method="POST">
        @csrf

        <div>
            <label>Judul:</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div>
            <label>Deskripsi:</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>

        <div>
            <label>Kualifikasi:</label>
            <textarea name="kualifikasi" class="form-control"></textarea>
        </div>

        <div>
            <label>Gaji:</label>
            <input type="text" name="gaji" class="form-control">
        </div>

        <div>
            <label>Lokasi Kerja:</label>
            <input type="text" name="lokasi_kerja" class="form-control" required>
        </div>

        <div>
            <label>Jenis Pekerjaan:</label>
            <select name="jenis_pekerjaan" class="form-control" required>
                <option value="fulltime">Fulltime</option>
                <option value="parttime">Parttime</option>
            </select>
        </div>

        <div>
            <label>Tanggal Ditutup:</label>
            <input type="date" name="tanggal_ditutup" class="form-control">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Buat Lowongan</button>


    </form>
</div>