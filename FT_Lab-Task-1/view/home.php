<?php
session_start();
?>
<h1>welcome to home</h1>
<?php
    echo $_SESSION["username"];
    echo '<br>'
?>
<a href="./logout.php"><input type="button" value="Logout"></a>
