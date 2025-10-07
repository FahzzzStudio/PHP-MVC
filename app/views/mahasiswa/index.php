<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3><br>
            <a href="<?= BASEURL; ?>/mahasiswa/tambah" class="btn btn-primary mb-3">Tambah Data</a>
            <!-- <button type="button" class="btn btn-primary"
            data-toggle="modal" data-targer="formModal">Tambah Data Siswa</button> -->
            <br><br>

            <table border="1" class="table">
                <tr>
                    <th>ID</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <!-- <th>Tanggal Lahir</th> -->
                    <!-- <th>Waktu Lahir</th> -->
                    <th>Nilai Matematika</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach($data['mhs'] as $mhs) : ?>
                <tr>
                    <td><?= $mhs['id']; ?></td>
                    <td><?= $mhs['nis']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <!-- <th><?= $mhs['tanggal_lahir']; ?></th> -->
                    <!-- <th><?= $mhs['waktu_lahir']; ?></th> -->
                    <td><?= $mhs['n_mtk']; ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
<br>
            <!-- <?php foreach($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['id']; ?></li>
                    <li><?= $mhs['nis']; ?></li>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['tanggal_lahir']; ?></li>
                    <li><?= $mhs['waktu_lahir']; ?></li>
                    <li><?= $mhs['n_mtk']; ?></li>
                </ul>
            <?php endforeach; ?> -->
        </div>
    </div>
</body>
</html>