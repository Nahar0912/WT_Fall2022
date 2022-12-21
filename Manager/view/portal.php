<?php
include('../view/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/portal.css">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="../index.php"><input type="button" value="Home"></a>
    <?php
    session_start();
        echo '<h1> Welcome to home: '.$_SESSION["username"].'</h1>';
        echo '<h3> Today is:',date('d F, Y (l)'),'</h3>';
    ?>
    <a href="./setting.php"><input type="button" value="Setting"></a>
    <a href="./logout.php"><input type="button" value="Logout"></a>
</body>
</html>
