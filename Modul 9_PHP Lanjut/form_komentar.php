<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
</head>
<body>
    <?php
    // Inisialisasi variabel dengan nilai kosong
    $name = $email = $comment = "";

    // Fungsi filter untuk mengamankan input
    function bersihkan_input($data) {
        $data = trim($data); // Menghapus spasi di awal/akhir
        $data = stripslashes($data); // Menghapus backslashes
        $data = htmlspecialchars($data); // Mengubah karakter khusus menjadi HTML entities
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil dan menyaring input menggunakan fungsi bersihkan_input
        $name = bersihkan_input($_POST["name"]);
        $email = bersihkan_input($_POST["email"]);
        $comment = bersihkan_input($_POST["comment"]);

        echo "<h2>Hasil Input Anda:</h2>";
        echo "Nama : " . $name . "<br>";
        echo "Email : " . $email . "<br>";
        echo "Komentar : " . $comment . "<br>";
        echo "<hr>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="name"><br>
        E-mail: <input type="email" name="email"><br>
        Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" value="simpan">
        <input type="reset" value="bersihkan">
    </form>

<?php
/* 
  ---------------------------------------------------------
  KESIMPULAN TUGAS:
  ---------------------------------------------------------
  1. YANG DIPELAJARI:
     * Penggunaan $_SERVER["PHP_SELF"] memungkinkan form diproses di halaman yang sama.
     * Pentingnya validasi input untuk mencegah celah keamanan pada aplikasi web.

  2. APA YANG TERJADI SAAT INPUT SKRIP (XSS):
     * Tanpa filter: Jika menginput <img src=... onerror=alert('hacked')>, browser akan 
       menjalankan skrip tersebut dan memunculkan pop-up "hacked" (Cross-Site Scripting).
     * Dengan filter: Fungsi htmlspecialchars() mengubah karakter '<' dan '>' menjadi teks biasa, 
       sehingga skrip tidak dijalankan oleh browser dan hanya ditampilkan sebagai teks.

  3. FUNGSI KEAMANAN:
     * trim(): Menghapus spasi tidak perlu.
     * stripslashes(): Menghapus tanda garis miring dari input.
     * htmlspecialchars(): Mencegah serangan XSS dengan menetralkan kode HTML/JavaScript.
  ---------------------------------------------------------
*/
?>
</body>
</html>