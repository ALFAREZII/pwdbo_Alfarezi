<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <h3>Tambah Data Mahasiswa</h3>
            <form action="<?= BASEURL; ?>/mahasiswa/tambahData" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan" required>
                        <option value="">Pilih jurusan</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
