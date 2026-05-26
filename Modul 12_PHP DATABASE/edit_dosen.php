<?php

require_once('config/Database.php');
require_once('class/Dosen.php');

$database = new Database();
$db = $database->connect();

$dosen = new Dosen($db);

$id = $_GET['id'];

$data = $dosen->getById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Dosen</title>

    <link rel="stylesheet" href="gaya_dashboard.css">
</head>
<body>

<?php
include('layout/sidebar.php');
include('layout/header.php');
?>

<div class="card" style="max-width:700px; margin:auto;">

    <div class="card-title">
        Edit Data Dosen
    </div>

    <form action="proses_editdosen.php" method="POST">

        <input
            type="hidden"
            name="idDosen"
            value="<?php echo $data['idDosen']; ?>"
        >

        <div class="form-group">
            <label>Nama Dosen</label>

            <input
                type="text"
                name="namaDosen"
                class="form-control"
                value="<?php echo $data['namaDosen']; ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>No HP</label>

            <input
                type="text"
                name="noHP"
                class="form-control"
                value="<?php echo $data['noHP']; ?>"
                required
            >
        </div>

        <button type="submit"
                name="update"
                class="btn btn-primary">

            Simpan Perubahan

        </button>

        <a href="tampil_dosen.php"
           class="btn"
           style="background:#e2e8f0;
                  color:#111827;">

            Batal

        </a>

    </form>

</div>

<?php include('layout/footer.php'); ?>

</body>
</html>