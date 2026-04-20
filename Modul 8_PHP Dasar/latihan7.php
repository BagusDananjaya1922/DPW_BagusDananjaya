<?php
// Array buah
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

// Menampilkan beberapa buah
echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

// Menampilkan satu per satu
echo "Saya suka " . $namaBuah[1] . "<br>"; // Mangga
echo "Saya suka " . $namaBuah[2] . "<br>"; // Jeruk
echo "Saya suka " . $namaBuah[3] . "<br>"; // Apel
echo "Saya suka " . $namaBuah[4] . "<br>"; // Melon

echo "<br>";

// Array asosiatif (nama dan umur)
$umur = array(
    "Andi" => "35 Tahun",
    "Ben" => "37 Tahun",
    "Joe" => "40 Tahun"
);

// Menambah data baru
$umur["Ahmad"] = "50 Tahun";

// Menampilkan satu data
echo "Umur Andi adalah " . $umur["Andi"] . "<br><br>";

// Menampilkan semua data
foreach ($umur as $nama => $usia) {
    echo "Umur $nama adalah $usia <br>";
}
?>