<?php 
require_once('koneksi.php'); 
$search = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kelola Data Dosen</title>
    <link rel="stylesheet" href="gaya_dashboard.css">
</head>
<body>

<?php 
// Memanggil HEAD & SIDEBAR
include('layout/sidebar.php'); 
include('layout/header.php'); 
?>

    <div class="card">
        <div class="card-title">Daftar Manajemen Data Dosen</div>
        
        <div class="toolbar">
            <form action="tampil_dosen.php" method="get" class="search-group">
                <input type="text" name="keyword" class="search-input" value="<?php echo $search; ?>" placeholder="Cari nama dosen...">
                <button type="submit" class="btn btn-primary">Cari Data</button>
            </form>
            <a href="input.php" class="btn btn-success">+ Tambah Dosen Baru</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap Dosen</th>
                        <th>Nomor Handphone</th>
                        <th style="text-align: center;">Aksi Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM t_dosen";
                    if ($search != '') { $query .= " WHERE namaDosen LIKE '%$search%'"; }
                    $query .= " ORDER BY idDosen ASC";
                    
                    $result = mysqli_query($link, $query);

                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td><strong>" . $data['namaDosen'] . "</strong></td>";
                            echo "<td>" . $data['noHP'] . "</td>";
                            echo "<td style='text-align: center;'>
                                    <a href='edit_dosen.php?id=" . $data['idDosen'] . "' class='btn' style='padding: 6px 12px; background: var(--primary-light); color: var(--primary); margin-right: 5px;'>Edit</a>
                                    <a href='hapus_dosen.php?id=" . $data['idDosen'] . "' class='btn' style='padding: 6px 12px; background: #ffebee; color: var(--danger);' onclick='return confirm(\"Hapus data?\")'>Hapus</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' style='text-align: center; color: var(--text-muted); padding: 30px;'>Data dosen tidak ditemukan dalam sistem.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php 
// Memanggil FOOTER
include('layout/footer.php'); 
?>