<?php
// Memanggil konfigurasi koneksi database
require_once('koneksi.php');

// Memeriksa apakah form dikirim melalui tombol Simpan (POST)
if (isset($_POST['input'])) {
    // Menangkap data dari form input
    $namaDosen = mysqli_real_escape_string($link, $_POST['namaDosen']);
    $noHP      = mysqli_real_escape_string($link, $_POST['noHP']);

    // Membuat query SQL untuk memasukkan data ke tabel t_dosen
    $query = "INSERT INTO t_dosen (namaDosen, noHP) VALUES ('$namaDosen', '$noHP')";
    
    // Menjalankan query ke database
    $hasil = mysqli_query($link, $query);

    // Memeriksa apakah proses insert berhasil atau gagal
    if ($hasil) {
        echo "<h3>Sukses! Data Dosen Berhasil Disimpan ke Database.</h3>";
        echo "<a href='input.php'><- Kembali ke Form Input</a>";
    } else {
        echo "<h3>Gagal Menyimpan Data!</h3>";
        echo "Pesan Error: " . mysqli_error($link);
    }
} else {
    // Jika file diakses langsung tanpa lewat form, kembalikan ke form input
    header("Location: input.php");
}
?>