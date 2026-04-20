<?php
// ======================
// Contoh fungsi tanpa return
// ======================
function writeMsg($nama) {
    echo "Selamat datang " . $nama . "<br>";
}

// pemanggilan fungsi
writeMsg("Ahmad");

echo "<br>";

// ======================
// Fungsi dengan nilai balik (return)
// ======================
function tambah($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    return $hasil;
}

// memanggil fungsi
$hasil = tambah(5, 5);

echo "Hasil penjumlahan: " . $hasil;
?>