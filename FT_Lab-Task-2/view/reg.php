<?php
include("../Process/regdata_store.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Reg.css">
    <title>Registration</title>
</head>
<body>
    <a href="../index.php"><input type="button" value="Home"></a>
    <form action="" method="POST" enctype="multipart/form-data">
        <h2 align="center">Registration</h2>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>New Password</td>
                <td><input type="text" name="newpassword" id=""></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="text" name="password">*</td>
			</tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="tel" name="phone" id=""></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="male" id="">Male</td>
                <td><input type="radio" name="gender" value="female" id="">Female</td>
            </tr>

            <tr>
                <td>Place</td>
                <td>
                    <input type="checkbox" id="Dhaka" name="Dhaka" value="Dhaka">Dhaka
                    <input type="checkbox" id="Chittagong" name="Chittagong" value="Chittagong">Chittagong               
                    <input type="checkbox" id="Rajshahi" name="Rajshahi" value="Rajshahi">Rajshahi
                </td>
            </tr>
            <tr>
                <td>Select image to upload:</td> 
                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="submit"></td>
                <td><input type="reset" value="Reset" name="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>