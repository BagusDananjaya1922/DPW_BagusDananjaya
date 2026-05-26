<?php 
require_once('../koneksi.php'); 
$search = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kelola Data Mahasiswa</title>
    <link rel="stylesheet" href="../gaya_dashboard.css">
</head>
<body>

<?php 
include('../layout/sidebar.php'); 
include('../layout/header.php'); 
?>

    <div class="card">
        <div class="card-title">Daftar Manajemen Data Mahasiswa</div>
        
        <div class="toolbar">
            <form action="tampil.php" method="get" class="search-group">
                <input type="text" name="keyword" class="search-input" value="<?php echo $search; ?>" placeholder="Cari nama mahasiswa...">
                <button type="submit" class="btn btn-primary">Cari Data</button>
            </form>
            <a href="input.php" class="btn btn-success">+ Tambah Mahasiswa Baru</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Program Studi</th>
                        <th>Alamat Tinggal</th>
                        <th>No HP</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM t_mahasiswa";
                    if ($search != '') { $query .= " WHERE namaMhs LIKE '%$search%'"; }
                    $query .= " ORDER BY npm ASC";
                    $result = mysqli_query($link, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $data['npm'] . "</td>";
                            echo "<td><strong>" . $data['namaMhs'] . "</strong></td>";
                            echo "<td>" . $data['prodi'] . "</td>";
                            echo "<td>" . $data['alamat'] . "</td>";
                            echo "<td>" . $data['noHP'] . "</td>";
                            echo "<td style='text-align: center;'>
                                    <a href='edit.php?npm=" . $data['npm'] . "' class='btn' style='padding: 6px 12px; background: var(--primary-light); color: var(--primary);'>Edit</a>
                                    <a href='tampil.php?hapus=" . $data['npm'] . "' class='btn' style='padding: 6px 12px; background: #ffebee; color: var(--danger); margin-left: 5px;' onclick='return confirm(\"Hapus?\")'>Hapus</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' style='text-align: center; color: var(--text-muted); padding: 30px;'>Data tidak ditemukan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php 
include('../layout/footer.php'); 
?>