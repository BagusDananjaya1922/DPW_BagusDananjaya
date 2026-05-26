<?php 
require_once('../koneksi.php'); 
// Menangkap keyword pencarian jika ada
$search = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kelola Data Matakuliah</title>
    <link rel="stylesheet" href="../gaya_dashboard.css">
</head>
<body>

<?php 
// Memanggil Layout Dashboard Sidebar & Header
include('../layout/sidebar.php'); 
include('../layout/header.php'); 
?>

    <div class="card">
        <div class="card-title">Daftar Manajemen Data Matakuliah</div>
        
        <div class="toolbar">
            <form action="tampil.php" method="get" class="search-group">
                <input type="text" name="keyword" class="search-input" value="<?php echo $search; ?>" placeholder="Cari nama matakuliah...">
                <button type="submit" class="btn btn-primary">Cari Data</button>
            </form>
            <a href="input.php" class="btn btn-success">+ Tambah Matakuliah Baru</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Kode MK</th>
                        <th>Nama Matakuliah</th>
                        <th>Bobot SKS</th>
                        <th>Alokasi Jam</th>
                        <th style="text-align: center;">Aksi Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM t_matakuliah";
                    if ($search != '') { 
                        $query .= " WHERE namaMK LIKE '%$search%'"; 
                    }
                    $query .= " ORDER BY kodeMK ASC";
                    
                    $result = mysqli_query($link, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td><code>" . $data['kodeMK'] . "</code></td>";
                            echo "<td><strong>" . $data['namaMK'] . "</strong></td>";
                            echo "<td>" . $data['sks'] . " SKS</td>";
                            echo "<td>" . $data['jam'] . " Jam</td>";
                            echo "<td style='text-align: center;'>
                                    <a href='edit.php?kode=" . $data['kodeMK'] . "' class='btn' style='padding: 6px 12px; background: var(--primary-light); color: var(--primary);'>Edit</a>
                                    <a href='tampil.php?hapus=" . $data['kodeMK'] . "' class='btn' style='padding: 6px 12px; background: #ffebee; color: var(--danger); margin-left: 5px;' onclick='return confirm(\"Apakah Anda yakin ingin menghapus matakuliah ini?\")'>Hapus</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' style='text-align: center; color: var(--text-muted); padding: 30px;'>Data matakuliah tidak ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php 
// Memproses fungsi hapus langsung di halaman ini agar lebih ringkas
if (isset($_GET['hapus'])) {
    $kode = mysqli_real_escape_string($link, $_GET['hapus']);
    if (mysqli_query($link, "DELETE FROM t_matakuliah WHERE kodeMK = '$kode'")) {
        echo "<script>window.location='tampil.php';</script>";
    }
}

include('../layout/footer.php'); 
?>