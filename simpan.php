<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $nis    = $_POST['nis'];
    $ekskul = $_POST['ekskul'];
    $alasan = $_POST['alasan'];

    $sql = "INSERT INTO pendaftaran (nama, kelas, nis, ekskul, alasan)
            VALUES ('$nama', '$kelas', '$nis', '$ekskul', '$alasan')";

    if (mysqli_query($conn, $sql)) {
        header("Location: berhasil.php");
    } else {
        echo "<script>alert('Pendaftaran Gagal! NIS mungkin sudah terdaftar.'); history.back();</script>";
    }
}
?>