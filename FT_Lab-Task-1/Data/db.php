<?php
class db{
 
    function OpenCon(){
        $conn = new mysqli("localhost","root","","form");
        return $conn;
    }
    function insertUser($conn,$tablename,$name,$email,$password,$phone,$gender,$place,$filepath,$address){
        $sql="INSERT INTO $tablename(name,email,password,phone,gender,place,filepath,address) VALUES ('$name','$email','$password','$phone','$gender','$place','$filepath','$address')";
        
        if($conn->query($sql)==TRUE){
            echo "data inserted";
        }
        else{
            echo "Error occured".$conn->error;
        }
    }

    function CheckUser($conn,$tablename,$username,$password){
        $sql = $conn->query("SELECT * FROM ". $tablename." WHERE name='". $username."' AND password='". $password."'");
        return $sql;
    }

    function ShowAll($conn,$tablename){
        $sql = $conn->query("SELECT * FROM  $tablename");
        return $sql;
    }


    function CloseCon($conn){
        $conn -> close();
    }
}
?>