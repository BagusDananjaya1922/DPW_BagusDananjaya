<?php

require_once('../config/Database.php');
require_once('../class/Matakuliah.php');

$database = new Database();
$db = $database->connect();

$matakuliah = new Matakuliah($db);

if(isset($_POST['ubah'])){

    $kodeLama = $_POST['kode_lama'];

    $kode = $_POST['kodeMK'];
    $nama = $_POST['namaMK'];
    $sks  = $_POST['sks'];
    $jam  = $_POST['jam'];

    if(
        $matakuliah->update(
            $kodeLama,
            $kode,
            $nama,
            $sks,
            $jam
        )
    ){

        header("Location: tampil.php");

    } else {

        echo "Gagal update data";
    }
}
?>