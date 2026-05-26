<?php
// Memanggil file koneksi database dengan password '12345' yang tadi
require_once('koneksi.php');

if (isset($_POST['input_mhs'])) {
    // Mengamankan inputan string data
    $npm     = mysqli_real_escape_string($link, $_POST['npm']);
    $namaMhs = mysqli_real_escape_string($link, $_POST['namaMhs']);
    $prodi   = mysqli_real_escape_string($link, $_POST['prodi']);
    $alamat  = mysqli_real_escape_string($link, $_POST['alamat']);
    $noHP    = mysqli_real_escape_string($link, $_POST['noHP']);

    // Query SQL insert ke t_mahasiswa
    $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) 
              VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHP')";
    
    $hasil = mysqli_query($link, $query);

    if ($hasil) {
        echo "<h3>Sukses! Data Mahasiswa Berhasil Disimpan.</h3>";
        echo "<a href='tampil_mahasiswa.php'>Lihat Tabel Data Mahasiswa -></a>";
    } else {
        echo "<h3>Gagal Menyimpan Data Mahasiswa!</h3>";
        echo "Pesan Error: " . mysqli_error($link);
    }
} else {
    header("Location: input_mahasiswa.php");
}
?>