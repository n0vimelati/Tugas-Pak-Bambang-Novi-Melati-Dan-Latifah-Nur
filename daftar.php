<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="jumbotron">
    <div class="container text-center py-5">
        <h1 class="display-4">Daftar Peserta Ekskul</h1>
    </div>
</div>
<div class="container">
    <table class="table table-striped table-bordered shadow">
        <thead class="table-primary text-center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NIS</th>
                <th>Ekskul Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM pendaftaran ORDER BY tanggal_daftar DESC");
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td class="text-center"><?= $no++; ?></td>
                <td><?= $data['nama']; ?></td>
                <td class="text-center"><?= $data['kelas']; ?></td>
                <td><?= $data['nis']; ?></td>
                <td><?= $data['ekskul']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="text-center mt-3">
        <a href="index.php" class="btn btn-primary">Kembali Daftar</a>
    </div>
</div>
</body>
</html>