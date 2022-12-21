<?php
    include("../Controller/reset_password.php");
    echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css//reset_pass.css">
    <title>Document</title>
</head>
<body>
    <a href="../index.php"><input class="btn" type="button" value="Home"></a>
    
    <form action="" method="post" enctype="multipart/form-data">
        <h2 align="center">Reset Password</h2>
        <table align="center">
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td>New Password:</td>
                <td><input type="password" name="Newpassword" id=""></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="Confirmpassword" id=""></td>
            </tr>
            <tr>
                <td><input class="btn" type="submit" name="Resetpassword" value="Reset Password"></td>
                <td><input class="btn" type="reset" name="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>