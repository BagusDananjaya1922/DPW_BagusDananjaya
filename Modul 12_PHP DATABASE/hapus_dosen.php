<?php

require_once('config/Database.php');
require_once('class/Dosen.php');

$database = new Database();
$db = $database->connect();

$dosen = new Dosen($db);

if(isset($_GET['id'])){

    $id = $_GET['id'];

    if($dosen->hapus($id)){

        header("Location: tampil_dosen.php");

    } else {

        echo "Gagal hapus data";
    }
}
?>