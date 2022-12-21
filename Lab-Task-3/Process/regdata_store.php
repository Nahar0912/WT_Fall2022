<?php
    $isValid=1;
    
    if(isset($_REQUEST["submit"])){
        if(empty($_REQUEST["name"])){
            echo "name is required";
            $isValid=0;
        }
        else{
            echo "Name:",$_REQUEST["name"];
        }


        echo "<br>";
        if(empty($_REQUEST["password"])){
            $isValid=0;
            echo "password is required";
            $isValid=0;
        }
        else{
            echo "Password:",$_REQUEST["password"];
        }


        echo "<br>";
        if($_REQUEST["newpassword"]==$_REQUEST["password"]){
            echo $_REQUEST["password"];
        }
        elseif(empty($_REQUEST["password"])){
            $isValid=0;
            echo "confirm password is required";
        }
        else{
            $isValid=0;
            echo "please provide similer password";
        }


        echo "<br>";
        if(empty($_REQUEST["phone"])){
            echo "phone is required";
            $isValid=0;
        }
        else{
            echo "Phone:",$_REQUEST["phone"];
        }


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


        echo "<br>";
        $checkboxvalue=array();
        $checkbox=0;
        if(isset($_REQUEST["Dhaka"]))
        {
            if($_REQUEST["Dhaka"]=="Dhaka"){
                echo "you clicked",$_REQUEST["Dhaka"];
                echo"<br>";
                $checkbox=1;
                array_push($checkboxvalue,$_REQUEST["Dhaka"]);
            }
            else{
                echo "not checked";
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
            echo"<br>";
        }


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

        
        if($isValid==1){
            $Regdata=array(
                'name'          =>$_REQUEST["name"],
                'email'         =>$_REQUEST["email"],
                'password'      =>$_REQUEST["password"],
                'phone'         =>$_REQUEST["phone"],
                'gender'        =>$_REQUEST['gender'],
                'place'         =>$checkboxvalue,
                'filepath'      =>$fileupload,
                'address'       =>$_REQUEST['address']
            );
    
           
            $tempdata = json_decode(file_get_contents('../Data/data.json'));
            $tempdata[] =$Regdata;

            
            $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);
            
           
            if(file_put_contents("../Data/data.json", $jsondata)) {
                header('Location: login.php');
            }
            else{
                echo "no data saved";
            }
        }
    }
?>