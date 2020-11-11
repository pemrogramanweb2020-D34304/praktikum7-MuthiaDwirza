<?php
    require_once("koneksi.php");

    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $ubahpassword = md5($_POST["ubah_password"]);

    if ($password != $ubahpassword) {
        echo "<center>";
        echo "<h2>Register Failed</h2><br>";
        echo "<a href='daftar.php'><- Back</a>";
        echo "</center>";
    } else {
        $sql = "INSERT INTO user(iduser, username, pass)
                    VALUES ('NULL','$username','$password')";
        $result = mysqli_query($connect, $sql);
        header("location: login.php");      
    }
?>