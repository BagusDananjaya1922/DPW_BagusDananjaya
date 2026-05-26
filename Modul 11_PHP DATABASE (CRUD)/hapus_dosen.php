<?php
require_once('koneksi.php');

if (isset($_GET['id'])) {
    $idDosen = $_GET['id'];

    // Query SQL untuk menghapus baris data
    $query = "DELETE FROM t_dosen WHERE idDosen = '$idDosen'";
    $hasil = mysqli_query($link, $query);

    if ($hasil) {
        // Jika berhasil hapus, langsung redirect otomatis kembali ke halaman utama
        header("Location: tampil_dosen.php");
    } else {
        echo "<h3>Gagal Menghapus Data!</h3>";
        echo "Pesan Error: " . mysqli_error($link);
    }
} else {
    header("Location: tampil_dosen.php");
}
?>