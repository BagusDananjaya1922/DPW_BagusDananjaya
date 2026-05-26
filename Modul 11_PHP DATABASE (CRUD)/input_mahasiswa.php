<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
    <style>
        h1 { text-align: center; }
        .container { width: 500px; margin: auto; }
        p { margin-bottom: 15px; }
        label { display: inline-block; width: 150px; }
        input[type="text"], textarea { width: 300px; padding: 4px; }
    </style>
</head>
<body>
    <h1>Input Data</h1>
    <div class="container">
        <form id="form_mahasiswa" action="proses_inputmhs.php" method="post">
            <fieldset>
                <legend>Input Data Mahasiswa</legend>
                <p>
                    <label for="npm">NPM :</label>
                    <input type="text" name="npm" id="npm" required>
                </p>
                <p>
                    <label for="namaMhs">Nama Mahasiswa :</label>
                    <input type="text" name="namaMhs" id="namaMhs" required>
                </p>
                <p>
                    <label for="prodi">Prodi :</label>
                    <input type="text" name="prodi" id="prodi" required>
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" id="alamat" rows="3" required></textarea>
                </p>
                <p>
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh: 08123456789" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input_mhs" value="Simpan" style="padding: 5px 15px; cursor: pointer;">
            </p>
        </form>
    </div>
</body>
</html>