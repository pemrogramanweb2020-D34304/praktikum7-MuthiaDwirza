<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>LOGIN</h2>
    <form action="submit.php" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" required></td>
        </tr>
    </table>
    <input type="submit" value="Login"><br>
    Belum mempunyai akun? <a href="daftar.php">daftar</a>
    </form>
   
</body>
</html>