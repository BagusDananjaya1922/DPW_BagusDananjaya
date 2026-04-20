<?php
// Gaji Obi
$gaji_pokok = 3250000;
$tunjangan = 1200000;

// Menghitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan;

// Pajak 10% dari gaji kotor
$pajak = 0.10 * $gaji_kotor;

// Menghitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

// Menampilkan hasil
echo "Gaji Pokok: Rp " . number_format($gaji_pokok, 0, ',', '.') . "<br>";
echo "Tunjangan: Rp " . number_format($tunjangan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp " . number_format($gaji_kotor, 0, ',', '.') . "<br>";
echo "Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "<br>";
echo "Gaji Bersih: Rp " . number_format($gaji_bersih, 0, ',', '.') . "<br>";
?>