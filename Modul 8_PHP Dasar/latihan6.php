<?php
// ======================
// WHILE LOOP
// ======================
echo "<b>While Loop</b><br>";

$x = 10;
while ($x > 5) {
    echo "Nomor : $x <br>";
    $x--;
}

echo "<br>";

// ======================
// DO WHILE
// ======================
echo "<b>Do While</b><br>";

$x = 1;
do {
    echo "Nomor : $x <br>";
    $x++;
} while ($x <= 5);

echo "<br>";

// ======================
// FOREACH
// ======================
echo "<b>Foreach</b><br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

echo "<br>";

// ======================
// FOR LOOP
// ======================
echo "<b>For Loop</b><br>";

for ($x = 0; $x <= 10; $x++) {
    echo "Nomor : $x <br>";
}

echo "<br>";

// ======================
// FOR + BREAK
// ======================
echo "<b>For dengan Break</b><br>";

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor : $x <br>";
}
?>