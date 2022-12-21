<?php
    include('../Data/db.php');

    session_start();

    if(isset($_REQUEST["login"])){
        if(empty($_REQUEST["username"]) || empty($_REQUEST["password"])){
            echo "please provide username";
        }
        else{
            $username=$_REQUEST["username"];
            $password=$_REQUEST["password"];

            $mydb = new db();
            $conobj=$mydb->OpenCon();

            $userQuery=$mydb->CheckUser($conobj,"user",$username,$password);

            if($userQuery->num_rows > 0) {
                $_SESSION['username']=$_REQUEST['username'];
                $_SESSION['password']=$_REQUEST['password'];
                header('Location: home.php');
            }
            else {
                echo "Username or Password is invalid";
            }
            $mydb->CloseCon($conobj);
        }
    }
?>