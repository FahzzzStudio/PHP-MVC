<h3>Detail Data Siswa</h3>
<ul class="list-group">
    <li class="list-group-item"><b>ID:</b> <?= $data['mhs']['id']; ?></li>
    <li class="list-group-item"><b>NIS:</b> <?= $data['mhs']['nis']; ?></li>
    <li class="list-group-item"><b>Nama:</b> <?= $data['mhs']['nama']; ?></li>
    <li class="list-group-item"><b>Nilai:</b> <?= $data['mhs']['n_mtk']; ?></li>
</ul>
<br>
<a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-secondary">Kembali</a>
