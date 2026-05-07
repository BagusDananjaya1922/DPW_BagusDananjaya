<?php
session_start();

$username = "admin";
$password = "12345";

if(isset($_POST["login"])){

    $u = $_POST["username"];
    $p = $_POST["password"];

    if($u == $username && $p == $password){

        $_SESSION["user"] = $u;

        header("Location: home.php");

    }else{

        echo "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Session</title>
</head>
<body>

<form method="post">

    Username :
    <input type="text" name="username">
    <br><br>

    Password :
    <input type="password" name="password">
    <br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>