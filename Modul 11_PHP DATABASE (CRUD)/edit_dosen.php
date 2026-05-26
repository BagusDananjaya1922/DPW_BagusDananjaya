<?php
// Memandil koneksi database
require_once('koneksi.php');

// Memeriksa apakah ada ID yang dikirim lewat URL
if (!isset($_GET['id'])) {
    header("Location: tampil_dosen.php");
    exit;
}

$idDosen = $_GET['id'];

// Ambil data dosen yang spesifik sesuai ID
$query = "SELECT * FROM t_dosen WHERE idDosen = '$idDosen'";
$result = mysqli_query($link, $query);

// Jika data tidak ditemukan di database
if (mysqli_num_rows($result) == 0) {
    echo "<h3>Data Dosen Tidak Demician!</h3>";
    echo "<a href='tampil_dosen.php'>Kembali ke Daftar</a>";
    exit;
}

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dosen</title>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
        p { margin-bottom: 15px; }
        label { display: inline-block; width: 120px; }
        input[type="text"] { width: 230px; padding: 4px; }
    </style>
</head>
<body>
    <h1>Edit Data Dosen</h1>
    <div class="container">
        <form action="proses_editdosen.php" method="post">
            <input type="hidden" name="idDosen" value="<?php echo $data['idDosen']; ?>">
            
            <fieldset>
                <legend>Form Perubahan Data</legend>
                <p>
                    <label for="nama">Nama Dosen :</label>
                    <input type="text" name="namaDosen" id="nama" value="<?php echo $data['namaDosen']; ?>" required>
                </p>
                <p>
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP" value="<?php echo $data['noHP']; ?>" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="update" value="Simpan Perubahan" style="padding: 5px 15px; cursor: pointer;">
                <a href="tampil_dosen.php" style="margin-left: 10px; text-decoration: none; color: gray;">Batal</a>
            </p>
        </form>
    </div>
</body>
</html>