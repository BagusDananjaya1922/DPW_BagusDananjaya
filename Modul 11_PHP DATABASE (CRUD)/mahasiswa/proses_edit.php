<?php
require_once('../koneksi.php');
if (isset($_POST['ubah'])) {
    $npm_lama = $_POST['npm_lama'];
    $npm      = mysqli_real_escape_string($link, $_POST['npm']);
    $namaMhs  = mysqli_real_escape_string($link, $_POST['namaMhs']);
    $prodi    = mysqli_real_escape_string($link, $_POST['prodi']);
    $alamat   = mysqli_real_escape_string($link, $_POST['alamat']);
    $noHP     = mysqli_real_escape_string($link, $_POST['noHP']);

    $query = "UPDATE t_mahasiswa SET npm='$npm', namaMhs='$namaMhs', prodi='$prodi', alamat='$alamat', noHP='$noHP' WHERE npm='$npm_lama'";
    if (mysqli_query($link, $query)) {
        header("Location: tampil.php");
    } else {
        echo "Error: " . mysqli_error($link);
    }
}