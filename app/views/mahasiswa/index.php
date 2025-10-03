<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <?php foreach($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['nrp']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>