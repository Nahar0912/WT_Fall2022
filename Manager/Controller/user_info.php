<?php
include('../Data/db.php');
    session_start();
    $error="";

    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->ShowAll($conobj,"user",$_SESSION['username']);

    $username=$email=$phone=$nid="";
    
    if ($userQuery->num_rows > 0) {
        while($row = $userQuery->fetch_assoc()) {
            $username=$row["name"];
            $email=$row["email"];
            $phone=$row['phone'];
            $nid=$row['nid'];
        }
    }
    else {
        echo "0 results";
    }
    $connection->CloseCon($conobj);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("../view/header.php");
    ?>
    <br>
    <table>
        <tr>
            <td>Name: </td>
            <td><?php echo $username ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><?php echo $phone ?></td>
        </tr>
        <tr>
            <td>NId:</td>
            <td><?php echo $nid ?></td>
        </tr>
    </table>
</body>
</html>
