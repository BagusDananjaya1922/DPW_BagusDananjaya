<?php
$x = 5;
$y = 10;

// ======================
// Arithmetic operators
// ======================
echo "Penambahan: " . ($x + $y) . "<br>";
echo "Pengurangan: " . ($x - $y) . "<br>";
echo "Perkalian: " . ($x * $y) . "<br>";
echo "Pembagian: " . ($x / $y) . "<br>";
echo "Modulus: " . ($x % $y) . "<br>";
echo "Exponensial: " . ($x ** $y) . "<br>";
echo "<br>";

// ======================
// Assignment operators
// ======================
$x += 2; // x = x + 2
$y *= 2; // y = y * 2

echo "Penambahan x: " . $x . "<br>";
echo "Perkalian y: " . $y . "<br>";
echo "<br>";

// ======================
// Increment / Decrement
// ======================
echo "Isi ++x: " . (++$x) . "<br>"; // tambah dulu
echo "Isi x++: " . ($x++) . "<br>"; // tampil dulu
echo "Isi x sekarang: " . $x . "<br>";
echo "<br>";

echo "Isi --y: " . (--$y) . "<br>"; // kurang dulu
echo "Isi y--: " . ($y--) . "<br>"; // tampil dulu
echo "Isi y sekarang: " . $y . "<br>";
echo "<br>";

// ======================
// Conditional operator
// ======================
$user = "Bagus Dananjaya";

$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status . "<br>";

$color = null;
echo $color ?? "red";

echo "<br><br>";

// ======================
// PENJELASAN x++ dan ++x
// ======================

// x++ : nilai ditampilkan dulu, baru ditambah 1
// ++x : nilai ditambah dulu, baru ditampilkan

echo "<b>Perbedaan x++ dan ++x:</b><br>";

$a = 5;
echo "Nilai awal a = 5 <br>";
echo "a++ = " . $a++ . "<br>"; // tampil dulu
echo "Setelah a++ = " . $a . "<br><br>";

$a = 5;
echo "++a = " . ++$a . "<br>"; // tambah dulu
echo "Setelah ++a = " . $a . "<br>";
?>