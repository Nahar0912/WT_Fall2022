<?php
    include("../Process/login-verification.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h2 align="center">Login</h2>
        <table align="center">
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="Login"></td>
                <td><input type="reset" name="reset" value="Reset"></td>
            </tr>
        </table>

        <p align="center">Don't have any account? <br> <br> <a href="./reg.php"><input type="button" value="Sign up"></a></p>
    </form>
</body>
</html>