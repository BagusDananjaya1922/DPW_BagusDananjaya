<?php

require_once('config/Database.php');
require_once('class/Dosen.php');

$database = new Database();
$db = $database->connect();

$dosen = new Dosen($db);

if(isset($_POST['input'])){

    $nama = $_POST['namaDosen'];
    $hp   = $_POST['noHP'];

    if($dosen->tambah($nama, $hp)){

        header("Location: tampil_dosen.php");

    } else {

        echo "Gagal menambahkan data";
    }
}
?>