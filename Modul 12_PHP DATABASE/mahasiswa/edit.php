<?php

require_once('../config/Database.php');
require_once('../class/Mahasiswa.php');

$database = new Database();
$db = $database->connect();

$mahasiswa = new Mahasiswa($db);

$npm = $_GET['npm'];

$data = $mahasiswa->getById($npm);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>

    <link rel="stylesheet" href="../gaya_dashboard.css">
</head>
<body>

<?php
include('../layout/sidebar.php');
include('../layout/header.php');
?>

<div class="card" style="max-width:700px; margin:auto;">

    <div class="card-title">
        Edit Data Mahasiswa
    </div>

    <form action="proses_edit.php" method="POST">

        <input
            type="hidden"
            name="npm_lama"
            value="<?php echo $data['npm']; ?>"
        >

        <div class="form-group">
            <label>NPM</label>

            <input
                type="text"
                name="npm"
                class="form-control"
                value="<?php echo $data['npm']; ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Nama Mahasiswa</label>

            <input
                type="text"
                name="namaMhs"
                class="form-control"
                value="<?php echo $data['namaMhs']; ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Program Studi</label>

            <input
                type="text"
                name="prodi"
                class="form-control"
                value="<?php echo $data['prodi']; ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Alamat</label>

            <textarea
                name="alamat"
                class="form-control"
                rows="4"
                required><?php echo $data['alamat']; ?></textarea>
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