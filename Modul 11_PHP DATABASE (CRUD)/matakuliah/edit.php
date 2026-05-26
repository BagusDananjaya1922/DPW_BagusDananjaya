<?php
require_once('../koneksi.php');

if (!isset($_GET['kode'])) {
    header("Location: tampil.php");
    exit;
}

$kode = mysqli_real_escape_string($link, $_GET['kode']);
$result = mysqli_query($link, "SELECT * FROM t_matakuliah WHERE kodeMK = '$kode'");

if (mysqli_num_rows($result) == 0) {
    header("Location: tampil.php");
    exit;
}

$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Matakuliah</title>
    <link rel="stylesheet" href="../gaya_dashboard.css">
</head>
<body>

<?php 
include('../layout/sidebar.php'); 
include('../layout/header.php'); 
?>

    <div class="card" style="max-width: 700px; margin: 0 auto;">
        <div class="card-title">Ubah Informasi Matakuliah</div>
        
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="kode_lama" value="<?php echo $data['kodeMK']; ?>">
            
            <div class="form-group">
                <label for="kodeMK">Kode Matakuliah</label>
                <input type="number" name="kodeMK" id="kodeMK" class="form-control" value="<?php echo $data['kodeMK']; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="namaMK">Nama Matakuliah</label>
                <input type="text" name="namaMK" id="namaMK" class="form-control" value="<?php echo $data['namaMK']; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="sks">Jumlah SKS</label>
                <input type="number" name="sks" id="sks" class="form-control" min="1" max="6" value="<?php echo $data['sks']; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="jam">Jumlah Jam</label>
                <input type="number" name="jam" id="jam" class="form-control" min="1" value="<?php echo $data['jam']; ?>" required>
            </div>
            
            <div style="margin-top: 25px;">
                <button type="submit" name="ubah" class="btn btn-primary">Simpan Perubahan</button>
                <a href="tampil.php" class="btn" style="background: #e2e8f0; color: var(--text-main); margin-left: 10px;">Batal</a>
            </div>
        </form>
    </div>

<?php 
include('../layout/footer.php'); 
?>