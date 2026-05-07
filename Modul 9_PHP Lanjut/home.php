<?php
session_start();

if(!isset($_SESSION["user"])){

    header("Location: login_session.php");
}

echo "Selamat datang " . $_SESSION["user"];
?>

<br><br>

<a href="logout.php">Logout</a>