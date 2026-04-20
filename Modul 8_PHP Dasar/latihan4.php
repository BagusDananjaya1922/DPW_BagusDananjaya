<?php
/* 
Operator perbandingan yang bisa digunakan:
==  : sama dengan
=== : identik
!=  : tidak sama dengan
<>  : tidak sama dengan
!== : tidak identik
>   : lebih besar dari
<   : lebih kecil dari
>=  : lebih besar atau sama dengan
<=  : lebih kecil atau sama dengan
<=> : spaceship operator
*/

// mendapatkan jam sekarang (format 0-23)
$t = date("H");

// ======================
// IF
// ======================
echo "If <br>";
if ($t < 16) {
    echo "Selamat siang!";
}

echo "<br><br>";

// ======================
// IF ELSE
// ======================
echo "If Else <br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br><br>";

// ======================
// NESTED IF
// ======================
echo "Nested If <br>";

if ($t < 12) {
    echo "Selamat pagi!";
} elseif ($t < 16) {
    echo "Selamat siang!";
} elseif ($t < 19) {
    echo "Selamat sore!";
} else {
    echo "Selamat malam!";
}
?>