<?php

require_once('../config/Database.php');
require_once('../class/Matakuliah.php');

$database = new Database();
$db = $database->connect();

$matakuliah = new Matakuliah($db);

$kode = $_GET['kode'];

$data = $matakuliah->getById($kode);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Matakuliah</title>

    <link rel="stylesheet" href="../gaya_dashboard.css">
</head>
<body>

<?php
include('../layout/sidebar.php');
include('../layout/header.php');
?>

<div class="card" style="max-width:700px; margin:auto;">

    <div class="card-title">
        Edit Data Matakuliah
    </div>

    <form action="proses_edit.php" method="POST">

        <input
            type="hidden"
            name="kode_lama"
            value="<?php echo $data['kodeMK']; ?>"
        >

        <div class="form-group">
            <label>Kode MK</label>

            <input
                type="number"
                name="kodeMK"
                class="form-control"
                value="<?php echo $data['kodeMK']; ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Nama Matakuliah</label>

            <input
                type="text"
                name="namaMK"
                class="form-control"
                value="<?php echo $data['namaMK']; ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>SKS</label>

            <input
                type="number"
                name="sks"
                class="form-control"
                value="<?php echo $data['sks']; ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Jam</label>

            <input
                type="number"
                name="jam"
                class="form-control"
                value="<?php echo $data['jam']; ?>"
                required
            >
        </div>

        <button type="submit"
                name="ubah"
                class="btn btn-primary">

            Simpan Perubahan

        </button>

        <a href="tampil.php"
           class="btn"
           style="background:#e2e8f0;
                  color:#111827;">

            Batal

        </a>

    </form>

</div>

<?php include('../layout/footer.php'); ?>

</body>
</html>