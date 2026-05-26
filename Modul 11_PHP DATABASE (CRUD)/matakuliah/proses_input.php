<?php
require_once('../koneksi.php');

if (isset($_POST['simpan'])) {
    $kodeMK = mysqli_real_escape_string($link, $_POST['kodeMK']);
    $namaMK = mysqli_real_escape_string($link, $_POST['namaMK']);
    $sks    = mysqli_real_escape_string($link, $_POST['sks']);
    $jam    = mysqli_real_escape_string($link, $_POST['jam']);

    $query = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES ('$kodeMK', '$namaMK', '$sks', '$jam')";
    
    if (mysqli_query($link, $query)) {
        header("Location: tampil.php");
        exit;
    } else {
        echo "<h3>Gagal Menyimpan Data Matakuliah!</h3>";
        echo "Pesan Error: " . mysqli_error($link);
    }
} else {
    header("Location: tampil.php");
}
?>