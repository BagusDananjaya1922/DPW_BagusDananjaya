<?php
require_once('koneksi.php');

if (isset($_POST['update'])) {
    $idDosen   = $_POST['idDosen'];
    $namaDosen = mysqli_real_escape_string($link, $_POST['namaDosen']);
    $noHP      = mysqli_real_escape_string($link, $_POST['noHP']);

    // Query SQL untuk mengubah data berdasarkan idDosen
    $query = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHP = '$noHP' WHERE idDosen = '$idDosen'";
    $hasil = mysqli_query($link, $query);

    if ($hasil) {
        echo "<h3>Sukses! Data Dosen Berhasil Diperbarui.</h3>";
        echo "<a href='tampil_dosen.php'><- Kembali ke Daftar Dosen</a>";
    } else {
        echo "<h3>Gagal Memperbarui Data!</h3>";
        echo "Pesan Error: " . mysqli_error($link);
    }
} else {
    header("Location: tampil_dosen.php");
}
?>