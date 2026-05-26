<?php

require_once('config/Database.php');
require_once('class/Dosen.php');

$database = new Database();
$db = $database->connect();

$dosen = new Dosen($db);

$search = isset($_GET['keyword']) ? $_GET['keyword'] : '';

$result = $dosen->tampil($search);

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
include('layout/sidebar.php');
include('layout/header.php');
?>

<div class="card">

    <div class="card-title">
        Daftar Manajemen Data Dosen
    </div>

    <div class="toolbar">

        <form action="" method="GET" class="search-group">

            <input
                type="text"
                name="keyword"
                class="search-input"
                placeholder="Cari nama dosen..."
                value="<?php echo $search; ?>"
            >

            <button type="submit" class="btn btn-primary">
                Cari Data
            </button>

        </form>

        <a href="input.php" class="btn btn-success">
            + Tambah Dosen Baru
        </a>

    </div>

    <div class="table-responsive">

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dosen</th>
                    <th>No HP</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php

                if($result->num_rows > 0){

                    $no = 1;

                    while($data = $result->fetch_assoc()){

                        echo "<tr>";

                        echo "<td>".$no++."</td>";

                        echo "<td><strong>".$data['namaDosen']."</strong></td>";

                        echo "<td>".$data['noHP']."</td>";

                        echo "<td style='text-align:center;'>

                                <a href='edit_dosen.php?id=".$data['idDosen']."'
                                   class='btn'
                                   style='padding:6px 12px;
                                          background: var(--primary-light);
                                          color: var(--primary);'>
                                    Edit
                                </a>

                                <a href='hapus_dosen.php?id=".$data['idDosen']."'
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
                        <td colspan='4'
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

<?php include('layout/footer.php'); ?>

</body>
</html>