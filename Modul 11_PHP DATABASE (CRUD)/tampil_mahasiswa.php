<?php
// Memanggil koneksi database
require_once('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Data Mahasiswa</title>
    <style>
        h1 { text-align: center; }
        table { width: 80%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        .tambah-btn { display: block; width: 80%; margin: 10px auto; text-align: right; }
    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    
    <div class="tambah-btn">
        <a href="input_mahasiswa.php" style="padding: 5px 10px; background: #28a745; color: white; text-decoration: none; border-radius: 3px;">+ Tambah Data Baru</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil seluruh data dari tabel t_mahasiswa
            $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
            $result = mysqli_query($link, $query);

            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                // Melakukan perulangan array data menggunakan while loop
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $data['npm'] . "</td>";
                    echo "<td>" . $data['namaMhs'] . "</td>";
                    echo "<td>" . $data['prodi'] . "</td>";
                    echo "<td>" . $data['alamat'] . "</td>";
                    echo "<td>" . $data['noHP'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Belum ada data di dalam database.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>