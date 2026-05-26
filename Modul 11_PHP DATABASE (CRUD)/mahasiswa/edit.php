<?php
require_once('../koneksi.php');
$npm = $_GET['npm'];
$result = mysqli_query($link, "SELECT * FROM t_mahasiswa WHERE npm = '$npm'");
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="../gaya.css">
</head>
<body>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <h1>Edit Data Mahasiswa</h1>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="npm_lama" value="<?php echo $data['npm']; ?>">
            <div class="form-group">
                <label>NPM</label>
                <input type="text" name="npm" class="form-control" value="<?php echo $data['npm']; ?>" required>
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="namaMhs" class="form-control" value="<?php echo $data['namaMhs']; ?>" required>
            </div>
            <div class="form-group">
                <label>Prodi</label>
                <input type="text" name="prodi" class="form-control" value="<?php echo $data['prodi']; ?>" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required><?php echo $data['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="noHP" class="form-control" value="<?php echo $data['noHP']; ?>" required>
            </div>
            <button type="submit" name="ubah" class="btn btn-primary">Simpan Perubahan</button>
            <a href="tampil.php" class="btn" style="color:var(--text-muted)">Batal</a>
        </form>
    </div>
</body>
</html>