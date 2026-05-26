<?php
require_once('../koneksi.php');
if (isset($_POST['simpan'])) {
    $npm     = mysqli_real_escape_string($link, $_POST['npm']);
    $namaMhs = mysqli_real_escape_string($link, $_POST['namaMhs']);
    $prodi   = mysqli_real_escape_string($link, $_POST['prodi']);
    $alamat  = mysqli_real_escape_string($link, $_POST['alamat']);
    $noHP    = mysqli_real_escape_string($link, $_POST['noHP']);

    $query = "INSERT INTO t_mahasiswa VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHP')";
    if (mysqli_query($link, $query)) {
        header("Location: tampil.php");
    } else {
        echo "Error: " . mysqli_error($link);
    }
}