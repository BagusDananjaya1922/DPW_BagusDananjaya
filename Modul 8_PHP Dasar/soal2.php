<?php
// Jumlah uang yang diambil
$jumlah = 1387500;

// Daftar pecahan uang
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

echo "Total Uang: Rp " . number_format($jumlah, 0, ',', '.') . "<br><br>";

foreach ($pecahan as $p) {
    // Hitung jumlah lembar tiap pecahan
    $lembar = intdiv($jumlah, $p);

    if ($lembar > 0) {
        echo "Pecahan Rp " . number_format($p, 0, ',', '.') . " : " . $lembar . " lembar<br>";
        
        // Kurangi sisa uang
        $jumlah = $jumlah % $p;
    }
}
?>