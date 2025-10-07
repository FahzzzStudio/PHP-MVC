<h3>Tambah Data Siswa</h3>
<form action="<?= BASEURL; ?>/mahasiswa/simpan" method="post">
    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control" id="nis" name="nis" required>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="n_mtk" class="form-label">Nilai Matematika</label>
        <input type="number" class="form-control" id="n_mtk" name="n_mtk" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-secondary">Kembali</a>
</form>
