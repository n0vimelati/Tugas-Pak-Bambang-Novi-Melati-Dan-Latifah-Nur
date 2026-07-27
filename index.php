<?php
$judul = "Pendaftaran Ekstrakurikuler";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- BAGIAN JUMBOTRON -->
<div class="jumbotron">
    <div class="container text-center py-5">
        <h1 class="display-4"><?php echo $judul; ?></h1>
        <p class="lead">Wujudkan minat dan bakatmu bersama kami</p>
        <hr class="my-4">
        <p>Silakan isi formulir di bawah ini untuk mendaftar</p>
    </div>
</div>

<!-- BAGIAN FORM PENDAFTARAN -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body p-4">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <select name="kelas" class="form-select" required>
                                <option value="">-- Pilih Kelas --</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nomor Induk Siswa (NIS)</label>
                            <input type="number" name="nis" class="form-control" placeholder="Masukkan NIS" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pilihan Ekstrakurikuler</label>
                            <select name="ekskul" class="form-select" required>
                                <option value="">-- Pilih Ekskul --</option>
                                <option value="Pramuka">Pramuka</option>
                                <option value="Bola Basket">Bola Basket</option>
                                <option value="Bola Voli">Bola Voli</option>
                                <option value="Pencak Silat">Pencak Silat</option>
                                <option value="Paduan Suara">Paduan Suara</option>
                                <option value="Rohis">Rohis</option>
                                <option value="Komputer">Komputer & IT</option>
                                <option value="Pecinta Alam">Pecinta Alam</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Alasan Memilih Ekskul Tersebut</label>
                            <textarea name="alasan" class="form-control" rows="3" placeholder="Tuliskan alasanmu..." required></textarea>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn btn-secondary">Kosongkan</button>
                            <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>