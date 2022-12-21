<?php
    //include('/view/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/index.css">
    <title>Document</title>
</head>
<body>
    <header class="row">
        <div class="div1">
            <h1>Life Spring</h1>
        </div>
        <div>
            <img src="./Images/pexels-pixabay-40568.jpg" width="700" height="230" alt="">
        </div>
    </header>

   
    <div align='center'>
        <h4>New visitor?</h4>
        <a href="./view/reg.php"><input type="button" value="Sign Up"></a>
        <p>or</p>
        <h4>Have an account?</h4>
        <a href="./view/login.php"><input type="button" value="Log In"></a>
        <br><br>
        <h4>Have an account?</h4>
        <a href="./view/portal.php"><input type="button" value="Profile"></a>
        <br><br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/xNoanoQ5syY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <?php
        include('../Manager/view/Footer.php');
    ?>
</body>
</html>