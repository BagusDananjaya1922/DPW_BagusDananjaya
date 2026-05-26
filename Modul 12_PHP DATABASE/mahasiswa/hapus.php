<?php

require_once('../config/Database.php');
require_once('../class/Mahasiswa.php');

$database = new Database();
$db = $database->connect();

$mahasiswa = new Mahasiswa($db);

if(isset($_GET['npm'])){

    $npm = $_GET['npm'];

    if($mahasiswa->hapus($npm)){

        header("Location: tampil.php");

    } else {

        echo "Gagal hapus data";
    }
}
?>