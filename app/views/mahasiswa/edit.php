<div class="container mt-5">
    <h3>Edit Data Mahasiswa</h3>
    <form action="<?= BASEURL; ?>/mahasiswa/edit" method="post">
        <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">

        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" value="<?= $data['mhs']['nis']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['mhs']['nama']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="n_mtk" class="form-label">Nilai MTK</label>
            <input type="text" class="form-control" id="n_mtk" name="n_mtk" value="<?= $data['mhs']['n_mtk']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-secondary">Batal</a>
    </form>
</div>
