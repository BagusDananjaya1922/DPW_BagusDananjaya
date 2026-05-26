<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Dosen</title>

    <link rel="stylesheet" href="../gaya.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form-control:focus {
            border-color: #4f46e5;
            outline: none;
            box-shadow: 0 0 5px rgba(76,175,80,0.5);
        }

        textarea.form-control {
            resize: vertical;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-primary {
            background: #4f46e5;
            color: white;
        }

        .btn-primary:hover {
            background: #46bde5;
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background: #c82333;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Input Data Dosen</h1>

        <form action="proses_inputdosen.php" method="post">

            <div class="form-group">
                <label for="nama">Nama Dosen</label>
                <input type="text"
                       name="namaDosen"
                       id="nama"
                       class="form-control"
                       placeholder="Masukkan nama dosen"
                       required>
            </div>

            <div class="form-group">
                <label for="noHP">No HP</label>
                <input type="text"
                       name="noHP"
                       id="noHP"
                       class="form-control"
                       placeholder="Contoh: 081234567890"
                       required>
            </div>

            <div class="button-group">
                <button type="submit"
                        name="input"
                        class="btn btn-primary">
                    Simpan Data
                </button>

                <a href="datadosen.php" class="btn btn-danger">
                    Batal
                </a>
            </div>

        </form>
    </div>

</body>
</html>