<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Matakuliah</title>
    <link rel="stylesheet" href="../gaya.css">
    <link rel="stylesheet" href="../gaya_dashboard.css">
</head>
<body>

<?php 

?>

    <div class="card" style="max-width: 700px; margin: 0 auto;">
        <div class="card-title">Tambah Data Matakuliah Baru</div>
        
        <form action="proses_input.php" method="post">
            <div class="form-group">
                <label for="kodeMK">Kode Matakuliah</label>
                <input type="number" name="kodeMK" id="kodeMK" class="form-control" placeholder="Contoh: 1022" required>
            </div>
            
            <div class="form-group">
                <label for="namaMK">Nama Matakuliah</label>
                <input type="text" name="namaMK" id="namaMK" class="form-control" placeholder="Masukkan nama matakuliah..." required>
            </div>
            
            <div class="form-group">
                <label for="sks">Jumlah SKS</label>
                <input type="number" name="sks" id="sks" class="form-control" min="1" max="6" placeholder="Contoh: 3" required>
            </div>
            
            <div class="form-group">
                <label for="jam">Jumlah Jam</label>
                <input type="number" name="jam" id="jam" class="form-control" min="1" placeholder="Contoh: 6" required>
            </div>
            
            <div style="margin-top: 25px;">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                <a href="tampil.php" class="btn" style="background: #e2e8f0; color: var(--text-main); margin-left: 10px;">Batal</a>
            </div>
        </form>
    </div>

<?php 
?>