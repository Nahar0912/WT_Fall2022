<?php
session_start();
?>
<h1>welcome to home</h1>
<?php
    echo $_SESSION["name"];
    echo '<br>'
?>
<a href="../view/logout.php">Logout</a>
