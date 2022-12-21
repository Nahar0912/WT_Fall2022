<?php

$error="";

if (isset($_POST['delete'])) {
    
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->DeleteUser($conobj,"user",$_SESSION["username"]);
    if($userQuery==TRUE)
    {
        echo "delete successful"; 
        header('Location: login.php');
    }
    else
    {
        echo "could not delete";    
    }
    $connection->CloseCon($conobj);
}

?>