<?php

require_once('../config/Database.php');
require_once('../class/Matakuliah.php');

$database = new Database();
$db = $database->connect();

$matakuliah = new Matakuliah($db);

if(isset($_GET['kode'])){

    $kode = $_GET['kode'];

    if($matakuliah->hapus($kode)){

        header("Location: tampil.php");

    } else {

        echo "Gagal hapus data";
    }
}
?>