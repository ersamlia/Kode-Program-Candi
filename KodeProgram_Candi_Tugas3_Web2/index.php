<?php
require_once 'candiController.php';

$candi = new Candi();
$data = $candi->getAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Candi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
    <h1 class="text-center mb-4">Data Candi</h1>

    <div class="mb-3">
        <a class="btn btn-primary" href="tambah.php">Tambah Data</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col" rowspan="3">Aksi</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $x): ?>

                    <tr>
                        <td><?= $x['id'] ?></td>
                        <td><?= $x['nama'] ?></td>
                        <td><?= $x['lokasi'] ?></td>
                        <td>
                        <a class="btn btn-success btn-sm" href="read.php?id=<?= $x['id']; ?>">Lihat</a>

                        </td>
                        <td>
                        <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $x['id']; ?>">Ubah</a>

                        </td>

                        <td>
                            <a class="btn btn-danger btn-sm" href="hapus.php?id=<?= $x['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>  
                    </tr>
                    <?php
                    endforeach
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
