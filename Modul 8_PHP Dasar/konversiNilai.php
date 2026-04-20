<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>

<h2>Konversi Nilai Angka ke Huruf</h2>

<form method="post">
    Masukkan Nilai: 
    <input type="number" name="nilai" min="0" max="100" required>
    <button type="submit">Konversi</button>
</form>

<?php
if (isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];

    if ($nilai >= 0 && $nilai <= 59) {
        $huruf = "C";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        $huruf = "BC";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        $huruf = "B";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        $huruf = "AB";
    } elseif ($nilai >= 90 && $nilai <= 100) {
        $huruf = "A";
    } else {
        $huruf = "Nilai tidak valid";
    }

    echo "<h3>Nilai Angka: $nilai</h3>";
    echo "<h3>Nilai Huruf: $huruf</h3>";
}
?>

</body>
</html>