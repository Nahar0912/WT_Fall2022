<?php
    include("../Controller/login_verification.php");
    include('../view/header.php');
    echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css//login.css">
    <title>Login</title>
</head>
<body>
    <a href="../index.php"><input class="btn" type="button" value="Home"></a>
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
                <td><input class="btn" type="submit" name="login" value="Login"></td>
                <td><input class="btn" type="reset" name="reset" value="Reset"></td>
            </tr>
        </table>

        

        <p align="center">
            <label for="remember">Remember Me</label>
            <input type="checkbox" name="remember" id="" value="1"><br><br>
            <a href="./forgotPassword.php">Forgot Password ?</a><br><br>
            Don't have any account? <br> <br> <a href="./reg.php"><input class="btn" type="button" value="Sign up"></a>
        </p>
    </form>
</body>
</html>