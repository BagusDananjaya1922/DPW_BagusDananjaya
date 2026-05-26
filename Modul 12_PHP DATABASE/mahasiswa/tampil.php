<?php

require_once('../config/Database.php');
require_once('../class/Mahasiswa.php');

$database = new Database();
$db = $database->connect();

$mahasiswa = new Mahasiswa($db);

$search = isset($_GET['keyword']) ? $_GET['keyword'] : '';

$result = $mahasiswa->tampil($search);

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

    <div class="card-title">
        Daftar Manajemen Data Mahasiswa
    </div>

    <div class="toolbar">

        <form action="" method="GET" class="search-group">

            <input
                type="text"
                name="keyword"
                class="search-input"
                placeholder="Cari nama mahasiswa..."
                value="<?php echo $search; ?>"
            >

            <button type="submit" class="btn btn-primary">
                Cari Data
            </button>

        </form>

        <a href="input.php" class="btn btn-success">
            + Tambah Mahasiswa Baru
        </a>

    </div>

    <div class="table-responsive">

        <table>

            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Program Studi</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php

                if($result->num_rows > 0){

                    while($data = $result->fetch_assoc()){

                        echo "<tr>";

                        echo "<td>".$data['npm']."</td>";

                        echo "<td><strong>".$data['namaMhs']."</strong></td>";

                        echo "<td>".$data['prodi']."</td>";

                        echo "<td>".$data['alamat']."</td>";

                        echo "<td>".$data['noHP']."</td>";

                        echo "<td style='text-align:center;'>

                                <a href='edit.php?npm=".$data['npm']."'
                                   class='btn'
                                   style='padding:6px 12px;
                                          background: var(--primary-light);
                                          color: var(--primary);'>
                                    Edit
                                </a>

                                <a href='hapus.php?npm=".$data['npm']."'
                                   class='btn'
                                   style='padding:6px 12px;
                                          background:#ffebee;
                                          color: var(--danger);
                                          margin-left:5px;'
                                   onclick='return confirm(\"Hapus data?\")'>
                                    Hapus
                                </a>

                              </td>";

                        echo "</tr>";
                    }

                } else {

                    echo "
                    <tr>
                        <td colspan='6'
                            style='text-align:center;
                                   padding:30px;
                                   color:gray;'>
                            Data tidak ditemukan
                        </td>
                    </tr>
                    ";
                }

                ?>

            </tbody>

        </table>

    </div>

</div>

<?php include('../layout/footer.php'); ?>

</body>
</html>