<?php
// Variabel koneksi dengan database MySQL
$host   = "127.0.0.1"; // Menggunakan IP local loopback agar stabil di Fedora
$user   = "root";      // User default phpMyAdmin
$paswd  = "12345";     // Menyesuaikan password phpMyAdmin laptop Anda
$name   = "database";  // Ganti dengan nama database yang Anda buat di phpMyAdmin

// Proses koneksi ke database
$link = mysqli_connect($host, $user, $paswd, $name);

// Periksa koneksi, jika gagal akan menampilkan pesan error
if (!$link) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}
?>