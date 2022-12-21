<?php
include('../Data/db.php');


$error="";

if (isset($_POST['update'])) {
    if (empty($_POST['username']) || empty($_POST['email'])) {
        $error = "input given is invalid";
    }
    else
    {
        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery=$connection->UpdateUser($conobj,"user",$_SESSION["username"],$_POST['email'],$_POST['gender'],$_POST['phone']);
        if($userQuery==TRUE)
        {
            echo "update successful"; 
        }
        else
        {
            echo "could not update";    
        }
        $connection->CloseCon($conobj);

    }
}


?>