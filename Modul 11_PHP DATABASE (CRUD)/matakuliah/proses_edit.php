<?php
require_once('../koneksi.php');

if (isset($_POST['ubah'])) {
    $kode_lama = $_POST['kode_lama'];
    $kodeMK    = mysqli_real_escape_string($link, $_POST['kodeMK']);
    $namaMK    = mysqli_real_escape_string($link, $_POST['namaMK']);
    $sks       = mysqli_real_escape_string($link, $_POST['sks']);
    $jam       = mysqli_real_escape_string($link, $_POST['jam']);

    $query = "UPDATE t_matakuliah SET kodeMK='$kodeMK', namaMK='$namaMK', sks='$sks', jam='$jam' WHERE kodeMK='$kode_lama'";
    
    if (mysqli_query($link, $query)) {
        header("Location: tampil.php");
        exit;
    } else {
        echo "<h3>Gagal Memperbarui Data Matakuliah!</h3>";
        echo "Pesan Error: " . mysqli_error($link);
    }
} else {
    header("Location: tampil.php");
}
?>