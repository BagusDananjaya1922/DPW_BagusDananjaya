<?php

require_once('../config/Database.php');
require_once('../class/Matakuliah.php');

$database = new Database();
$db = $database->connect();

$matakuliah = new Matakuliah($db);

$search = isset($_GET['keyword']) ? $_GET['keyword'] : '';

$result = $matakuliah->tampil($search);

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
include('../layout/sidebar.php');
include('../layout/header.php');
?>

<div class="card">

    <div class="card-title">
        Daftar Manajemen Data Matakuliah
    </div>

    <div class="toolbar">

        <form action="" method="GET" class="search-group">

            <input
                type="text"
                name="keyword"
                class="search-input"
                placeholder="Cari matakuliah..."
                value="<?php echo $search; ?>"
            >

            <button type="submit" class="btn btn-primary">
                Cari Data
            </button>

        </form>

        <a href="input.php" class="btn btn-success">
            + Tambah Matakuliah
        </a>

    </div>

    <div class="table-responsive">

        <table>

            <thead>
                <tr>
                    <th>Kode MK</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php

                if($result->num_rows > 0){

                    while($data = $result->fetch_assoc()){

                        echo "<tr>";

                        echo "<td>".$data['kodeMK']."</td>";

                        echo "<td><strong>".$data['namaMK']."</strong></td>";

                        echo "<td>".$data['sks']."</td>";

                        echo "<td>".$data['jam']."</td>";

                        echo "<td style='text-align:center;'>

                                <a href='edit.php?kode=".$data['kodeMK']."'
                                   class='btn'
                                   style='padding:6px 12px;
                                          background: var(--primary-light);
                                          color: var(--primary);'>
                                    Edit
                                </a>

                                <a href='hapus.php?kode=".$data['kodeMK']."'
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
                        <td colspan='5'
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