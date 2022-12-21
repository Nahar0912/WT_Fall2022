<?php
    include('../Data/db.php');
    $isValid=1;
    
    if(isset($_REQUEST["submit"])){
        //-----name----
        if(empty($_REQUEST["name"])){
            echo "name is required";
            $isValid=0;
        }
        else{
            echo "Name:",$_REQUEST["name"];
        }


        //-----email-----
        echo "<br>";
        if(empty($_REQUEST["email"])){
            echo "email is required";
            $isValid=0;
        }
        else{
            echo "Email:",$_REQUEST["email"];
        }


        //-----new pass-----
        echo "<br>";
        if(empty($_REQUEST["newpassword"])){
            $isValid=0;
            echo "Newpassword is required";
        }
        else{
            echo "Newpassword:",$_REQUEST["newpassword"];
        }


        //------password-----
        echo "<br>";
        if($_REQUEST["newpassword"]==$_REQUEST["password"]){
            echo $pass= $_REQUEST["password"];
        }
        elseif(empty($_REQUEST["password"])){
            $isValid=0;
            echo "confirm password is required";
        }
        else{
            $isValid=0;
            echo "please provide similer password";
        }


        //----phone------
        echo "<br>";
        if(empty($_REQUEST["phone"])){
            echo "phone is required";
            $isValid=0;
        }
        else{
            echo "Phone:",$_REQUEST["phone"];
        }


        //----Gender-----
        echo "<br>";
        if(isset($_REQUEST["gender"])){
            if($_REQUEST["gender"]=="male"){
                echo "Gender:",$_REQUEST["gender"];
            }
            else{
                echo "Gender:",$_REQUEST["gender"];
            }
        }
        else{
            echo "required area";
            $isValid=0;
        }


        //-----Place-----
        echo "<br>";
        $checkboxvalue=array();
        $insertCheckBox=implode(',',$checkboxvalue);
        $checkbox=0;
        if(isset($_REQUEST["Dhaka"]))
        {
            if($_REQUEST["Dhaka"]=="Dhaka"){
                echo "you clicked",$_REQUEST["Dhaka"];
                echo"<br>";
                $checkbox=1;
                array_push($checkboxvalue,$_REQUEST["Dhaka"]);
            }
        }
        if(isset($_REQUEST["Chittagong"]))
        {
            if($_REQUEST["Chittagong"]=="Chittagong"){
                echo "you clicked",$_REQUEST["Chittagong"];
                echo"<br>";
                $checkbox=1;
                array_push($checkboxvalue,$_REQUEST["Chittagong"]);
            }
        }
        if(isset($_REQUEST["Rajshahi"]))
        {
            if($_REQUEST["Rajshahi"]=="Rajshahi"){
                echo "you clicked",$_REQUEST["Rajshahi"];
                echo"<br>";
                $checkbox=1;
                array_push($checkboxvalue,$_REQUEST["Rajshahi"]);
            }
        }
        if($checkbox==0){
            echo "checkbox is not checked";
            $isValid=0;
            echo"<br>";
        }


        //---File upload----
        echo "<br>";
        $target_dir = "../File/";
        $target_file = $target_dir . $_FILES["fileToUpload"]["name"];
 
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $fileupload = $_FILES["fileToUpload"]["type"];
        }
        else {
            echo "Sorry, there was an error uploading your file.";
            $isValid=0;
        }

        //----db-------
        if($isValid==1){
            $mydb=new db();
            $conobj=$mydb->openCon();
            
            $mydb->insertUser($conobj,"user",$_REQUEST['name'],$_REQUEST['email'],$pass,$_REQUEST['phone'],$_REQUEST['gender'],$insertCheckBox,$fileupload,$_REQUEST['address']);

            $mydb->CloseCon($conobj);
        }
    }
?>