<?php
    include("../Data/db.php");

    $isValid=1;

    if(isset($_REQUEST["Resetpassword"])){
        if(empty($_REQUEST["email"])){
            echo "Please provide email";
            $isValid=0;
        }
        
        
        //------set password----------
        echo "<br>";
        if(empty($_REQUEST["Newpassword"])){
            echo "New password is required";
            $isValid=0;
        }
        elseif(strlen($_REQUEST["Newpassword"]) < 5){
            echo "New Password must contain at least 5 characters";
            $isValid = 0;
        }


        //----set confirm password-----
        echo "<br>";
        if($_REQUEST["Newpassword"]==$_REQUEST["Confirmpassword"]){
            $_REQUEST["Confirmpassword"];
        }
        elseif(empty($_REQUEST["Confirmpassword"])){
            $isValid=0;
            echo "confirm password is required";
        }
        else{
            $isValid=0;
            echo "please provide similar password";
        }

        if($isValid==1){
            $email=$_REQUEST["email"];

            $mydb = new db();
            $conobj=$mydb->OpenCon();

            $userQuery=$mydb->CheckEmail($conobj,"user",$_REQUEST['email']);

            if($userQuery->num_rows > 0) {
                $userQuery=$mydb->UpdatePass($conobj,"user",$_REQUEST['email'],$_REQUEST['Confirmpassword']);
                if($userQuery==TRUE)
                {
                    echo "update successful"; 
                    header('Location: portal.php');
                }
                else
                {
                    echo "could not update";    
                }
                
            }
            else {
                echo "User invalid";
            }
            $mydb->CloseCon($conobj);
        
        }
    }
?>