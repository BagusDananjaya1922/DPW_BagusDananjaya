<?php

require_once('../config/Database.php');
require_once('../class/Mahasiswa.php');

$database = new Database();
$db = $database->connect();

$mahasiswa = new Mahasiswa($db);

if(isset($_POST['simpan'])){

    $npm     = $_POST['npm'];
    $nama    = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $hp      = $_POST['noHP'];

    if(
        $mahasiswa->tambah(
            $npm,
            $nama,
            $prodi,
            $alamat,
            $hp
        )
    ){

        header("Location: tampil.php");

    } else {

        echo "Gagal tambah data";
    }
}
?>