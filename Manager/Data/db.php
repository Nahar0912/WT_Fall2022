<?php
class db{
 
    function OpenCon(){
        $conn = new mysqli("localhost","root","","manager");
        return $conn;
    }


    function insertUser($conn,$tablename,$name,$email,$password,$phone,$nid,$gender,$place,$shift,$filepath,$imagedata,$address){
        $sql="INSERT INTO $tablename(name,email,password,phone,nid,gender,place,shift,file,image,address) VALUES ('$name','$email','$password','$phone','$nid','$gender','$place','$shift','$filepath','$imagedata','$address')";
        
        if($conn->query($sql)==TRUE){
            echo "data inserted";
        }
        else{
            echo "Error occurred".$conn->error;
        }
    }


    function UpdateUser($conn,$table,$username,$email,$gender,$phone)
    {
        $sql = "UPDATE $table SET name='$username', email='$email',gender='$gender',phone='$phone' WHERE name='$username'";

        if ($conn->query($sql) === TRUE) {
            $result= TRUE;
        } else {
            $result= FALSE ;
        }
        return  $result;
    }

    function UpdatePass($conn,$table,$email,$password)
    {
        $sql = "UPDATE $table SET password='$password' WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            $result= TRUE;
        } else {
            $result= FALSE ;
        }
        return  $result;
    }
    

    function DeleteUser($conn,$tablename,$name)
    {
        $sql="DELETE FROM $tablename WHERE name='$name'";
        if ($conn->query($sql) === TRUE) {
            $result= TRUE;
        } else {
            $result= FALSE ;
        }
        return  $result;
    }


    function CheckUser($conn,$tablename,$username,$password){
        $sql = $conn->query("SELECT * FROM ". $tablename." WHERE name='". $username."' AND password='". $password."'");
        return $sql;
    }

    function CheckEmail($conn,$tablename,$email){
        $sql = $conn->query("SELECT * FROM $tablename WHERE email ='$email'");
        return $sql;
    }


    function ShowAll($conn,$tablename,$username){
        $sql = $conn->query("SELECT * FROM  $tablename WHERE name='$username'");
        return $sql;
    }


    function CloseCon($conn){
        $conn -> close();
    }
}
?>