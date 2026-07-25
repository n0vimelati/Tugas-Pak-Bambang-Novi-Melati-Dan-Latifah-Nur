<?php
$judul = "Profil Kelompok Kami";
$anggota1 ="Latifah Nur Hidayat";
$anggota2 ="Novi Melati Putri Desti";
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $judul; ?></title>
    <!--Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Proyek Kelompok</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#anggota">Anggota</a></li>
        <li class="nav-item"><a class="nav-link" href="#tugas">Tugas</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Jumbotron -->
<div class="p-5 mb-4 rounded-3 jumbotron-kita">
  <div class="container py-5 text-white text-center">
    <h1 class="display-4 fw-bold">Selamat Datang!</h1>
    <p class="lead">Proyek Kelompok Pemrograman Web</p>
    <hr class="my-4 bg-white">
    <p>Kami menggabungkan PHP, Bootstrap, dan CSS untuk membuat tampilan ini.</p>
    <a class="btn btn-light btn-lg" href="#anggota" role="button">Lihat Anggota</a>
  </div>
</div>

<!-- Isi Halaman -->
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1><?php echo $judul; ?></h1>
        <p class="lead">Mata Pelajaran: Pemrograman Web</p>
    </div>

    <!-- Kartu Anggota Kelompok -->
    <div class="row g-4" id="anggota">
        <div class="col-md-6">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <h4><?php echo $anggota1; ?></h4>
                    <p class="text-muted">Peran: Desain & Tampilan</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <h4><?php echo $anggota2; ?></h4>
                    <p class="text-muted">Peran: Kode PHP & Fungsi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pembagian Tugas -->
    <div class="mt-5 p-4 bg-light rounded" id="tugas">
        <h3>Pembagian Tugas</h3>
        <ul class="mt-3">
            <li>Membuat tampilan menggunakan Bootstrap 5</li>
            <li>Menyusun kode PHP sederhana</li>
            <li>Mempercantik tampilan dengan CSS</li>
            <li>Menguji agar berjalan lancar</li>
        </ul>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>© 2026 Proyek Kelompok RPL</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html