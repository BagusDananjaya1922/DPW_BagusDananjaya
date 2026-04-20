<?php
// data kelas dengan array 2 dimensi
$array = array(
    "10A" => array("Udin", "Ismail", "Adi"),
    "10B" => array("Lukman", "Fajri", "Mahmud", "Andi")
);

// menampilkan seluruh array
echo "<b>Semua Data:</b><br>";
print_r($array);
echo "<br><br>";

// menampilkan kelas 10A
echo "<b>Kelas 10A:</b><br>";
print_r($array["10A"]);
echo "<br><br>";

// menampilkan data pertama kelas 10A
echo "Data pertama kelas 10A: " . $array["10A"][0] . "<br>";

// menampilkan Fajri
echo "Fajri ada di kelas 10B: " . $array["10B"][1] . "<br>";

// menampilkan Andi
echo "Andi ada di kelas 10B: " . $array["10B"][3] . "<br>";

echo "<br>";

// versi array sederhana (short syntax)
$array_simple = [
    "10A" => ["Udin", "Ismail", "Adi"],
    "10B" => ["Lukman", "Fajri", "Mahmud"]
];

echo "<b>Array Simple:</b><br>";
print_r($array_simple);
?>