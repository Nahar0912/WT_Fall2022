<?php
    session_start();
    $isValid=1;

    if(isset($_REQUEST["login"])){
        if($_REQUEST["username"]==""){
            echo "please provide username";
            $isValid=0;
        }
        

        if($_REQUEST["password"]==""){
            echo "please provide password";
            $isValid=0;
        }
        

        if($isValid==1){
            $data = json_decode(file_get_contents('../Data/data.json'), true);

            $userexist=0;
            $passexist=0;
            foreach($data as $key => $value){
                if ($value['name'] == $_REQUEST['username']) {
                    $userexist=1;
                    if ($value['password'] == $_REQUEST['password']) {
                        $passexist=1;
                    }
                }
            }

            if($userexist==1){
                echo "User:  ",$_REQUEST["username"]," exist";

                if($passexist==1){
                    $_SESSION['name']=$_REQUEST['username'];
                    $_SESSION['password']=$_REQUEST['password'];
                    header('Location: home.php');
                }
                else{
                    echo "<br> Password does not match";
                }
            }
            else{
                echo "<br> user does not exist";
            }
        }
    }
?>