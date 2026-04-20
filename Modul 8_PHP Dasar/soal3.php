<?php
// Data siswa (array asosiatif: nama => poin)
$siswa = [
    "Adi" => 75,
    "Joni" => 80,
    "Jihan" => 65,
    "Aya" => 70,
    "Ita" => 85,
    "Budi" => 90,
    "Tini" => 95,
    "Sari" => 65
];

// ======================
// a) Poin siswa nomor urut 5
// ======================
echo "<b>a) Poin siswa nomor urut 5:</b><br>";

// ambil data ke-5 (index ke-4)
$nama = array_keys($siswa)[4];
$poin = $siswa[$nama];

echo "$nama dengan poin $poin <br><br>";


// ======================
// b) Siswa dengan poin 90
// ======================
echo "<b>b) Siswa dengan poin 90:</b><br>";

$ada = false;
foreach ($siswa as $nama => $nilai) {
    if ($nilai == 90) {
        echo $nama . "<br>";
        $ada = true;
    }
}
if (!$ada) {
    echo "Tidak ada<br>";
}

echo "<br>";


// ======================
// c) Siswa dengan poin 100
// ======================
echo "<b>c) Siswa dengan poin 100:</b><br>";

$ada = false;
foreach ($siswa as $nama => $nilai) {
    if ($nilai == 100) {
        echo $nama . "<br>";
        $ada = true;
    }
}
if (!$ada) {
    echo "Tidak ada<br>";
}
?>