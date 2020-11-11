<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
        <h1>REGISTER</h1>
    <form action="kirim.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Ubah Password</td>
                <td><input type="password" name="ubah_password" required></td>
            </tr>
        </table>
        <input type="submit" value="Register"><br>
        Sudah mempunyai akun? <a href="login.php">Login -></a>
    </form>
    
</body>
</html>