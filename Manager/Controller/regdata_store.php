<?php
    include('../Data/db.php');

    $isValid=1;
    
    if(isset($_REQUEST["submit"])){
        //------set name--------
        if(empty($_REQUEST["name"])){
            echo "name is required";
            $isValid=0;
        }
        elseif(!preg_match("/^[a-zA-Z ]*$/",$_REQUEST["name"])) {
            echo "Only letters and white space allowed";
        }
        else{
            echo "Name:",$_REQUEST["name"];
        }


        //------set email--------
        echo "<br>";
        if(empty($_REQUEST["email"])){
            echo "Email is required";
            $isValid=0;
        }
        if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
          }
        else{
            echo "Email:",$_REQUEST["email"];
        }


        //------set password----------
        echo "<br>";
        if(empty($_REQUEST["password"])){
            echo "password is required";
            $isValid=0;
        }
        elseif(strlen($_REQUEST["password"]) < 5){
            echo "Password must contain at least 5 characters";
            $isValid = 0;
        }
        else{
            echo "Password:",$_REQUEST["password"];
        }


        //----set confirm password-----
        echo "<br>";
        if($_REQUEST["newpassword"]==$_REQUEST["password"]){
            echo 'Confirm password:', $_REQUEST["password"];
        }
        elseif(empty($_REQUEST["password"])){
            $isValid=0;
            echo "confirm password is required";
        }
        else{
            $isValid=0;
            echo "please provide similer password";
        }


        //--------set phone number-----
        echo "<br>";
        if(empty($_REQUEST["phone"])){
            echo "phone is required";
            $isValid=0;
        }
        else{
            echo "Phone:",$_REQUEST["phone"];
        }


        //--------set NID-----
        echo "<br>";
        if(empty($_REQUEST["NID"])){
            echo "NID is required";
            $isValid=0;
        }
        else{
            echo "NID:",$_REQUEST["NID"];
        }


        
        //-----set gender------
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
            echo "Gender required";
            $isValid=0;
        }


        //------------------set checkbox area--------------
        echo "<br>";
        $checkboxvalue=array();
        $checkbox=0;
        if(isset($_REQUEST["Dhaka"]))
        {
            if($_REQUEST["Dhaka"]=="Dhaka"){
                echo "you clicked",$_REQUEST["Dhaka"];
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
        }


        //--------Working shifts---------
        echo "<br>";
        if(isset($_REQUEST["shift"])){
            if($_REQUEST["shift"]=="Day"){
                echo "Shift:",$_REQUEST["shift"];
            }
            else{
                echo "Shift:",$_REQUEST["shift"];
            }
        }
        else{
            echo "Shift required";
            $isValid=0;
        }


        //--------File upload----------
        echo "<br>";
        $target_dir = "../File/";
        $target_file = $target_dir . $_FILES["fileToUpload"]["name"];
 
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $fileupload = $_FILES["fileToUpload"]["type"];
            echo 'File uploded';
        }
        else {
            echo "Sorry, there was an error uploading your file.";
            $isValid=0;
        }


        //--------image upload----------
        echo "<br>";
        $target_dir = "../Images/";
        $target_file = $target_dir . $_FILES["imageToUpload"]["name"];
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
        
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            $isValid=0;
        }
        elseif (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
            $imageupload = $_FILES["imageToUpload"]["type"];
            echo 'File uploded';
        }
        else {
            echo "Sorry, there was an error uploading your file.";
            $isValid=0;
        }

        //----------set Address----------
        if(empty($_REQUEST["address"])){
            echo "Address is required";
            $isValid=0;
        }
        else{
            echo "Address:",$_REQUEST["address"];
        }

        
        //-----------send form data to SQL----------
       
        if($isValid==1){
            $mydb=new db();
            $conobj=$mydb->OpenCon();
            
            $mydb->insertUser($conobj,"user",$_REQUEST["name"],$_REQUEST["email"],$_REQUEST["password"],$_REQUEST["phone"],$_REQUEST["NID"],$_REQUEST['gender'],$checkboxvalue,$_REQUEST["shift"],$fileupload,$imageupload,$_REQUEST["address"]);
            
            header('Location: login.php');
            $mydb->CloseCon($conobj);
        }
    }
?>