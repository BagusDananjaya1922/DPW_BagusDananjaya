<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="../gaya.css">
</head>
<body>
    <div class="container" style="max-width: 600px; margin-top: 40px;">
        <h1>Tambah Data Mahasiswa</h1>
        <form action="proses_input.php" method="post">
            <div class="form-group">
                <label>NPM</label>
                <input type="text" name="npm" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="namaMhs" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Prodi</label>
                <input type="text" name="prodi" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="noHP" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
            <a href="tampil.php" class="btn" style="color:var(--text-muted)">Batal</a>
        </form>
    </div>
</body>
</html>