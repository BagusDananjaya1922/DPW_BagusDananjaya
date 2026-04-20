<!DOCTYPE html>
<html>
<head>
    <title>Konversi Terbilang</title>
</head>
<body>

<h2>Konversi Angka ke Huruf (1 - 9)</h2>

<form method="post">
    Masukkan Angka (1-9): 
    <input type="number" name="angka" min="1" max="9" required>
    <button type="submit">Konversi</button>
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];

    switch ($angka) {
        case 1:
            $hasil = "satu";
            break;
        case 2:
            $hasil = "dua";
            break;
        case 3:
            $hasil = "tiga";
            break;
        case 4:
            $hasil = "empat";
            break;
        case 5:
            $hasil = "lima";
            break;
        case 6:
            $hasil = "enam";
            break;
        case 7:
            $hasil = "tujuh";
            break;
        case 8:
            $hasil = "delapan";
            break;
        case 9:
            $hasil = "sembilan";
            break;
        default:
            $hasil = "Angka tidak valid";
    }

    echo "<h3>Angka: $angka</h3>";
    echo "<h3>Terbilang: $hasil</h3>";
}
?>

</body>
</html>