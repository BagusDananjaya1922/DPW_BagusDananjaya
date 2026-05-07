<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galery Gambar</title>

    <style>
        body{
            font-family: Arial;
        }

        .galery{
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .item{
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px;
            text-align: center;
        }

        .item img{
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<h2>Galery Gambar</h2>

<div class="galery">

<?php

$fileList = glob("gambar/*");

foreach ($fileList as $filename) {

    if (is_file($filename)) {

        echo "<div class='item'>";
        echo "<img src='$filename'>";
        echo "<p>$filename</p>";
        echo "</div>";
    }
}

?>

</div>

</body>
</html>