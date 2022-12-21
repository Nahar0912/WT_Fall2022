<?php
    include('../Controller/regdata_store.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/reg.css">
    <script src="../Js/registration_validation.js"></script>
    <title>Registration</title>
</head>
<body>
    <header>
        <img src="../Images/patient-portal.jpg" width="1340" height="200" alt="">
    </header>
    <?php
        include("../view/header.php");
    ?>
    <br>
    <a href="../index.php"><input class="m btn" type="button" value="Home"></a>
    <h2 class="m" align="center">Registration For Manager</h2>
    <form class="m" action="" method="POST" enctype="multipart/form-data" onsubmit="return checkForm()"><br>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id="name"><p id="name-Error"></p></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id="email"><p id="email-Error"></p></td>
            </tr>
            <tr>
                <td>New Password:</td>
                <td><input type="text" name="newpassword" id="newpassword"><p id="npass-Error"></p></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="password" id="password">*<p id="pass-Error"></p></td>
			</tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" name="phone" id="phone"><p id="phone-Error"></p></td>
            </tr>
            <tr>
                <td>NID Number:</td>
                <td><input type="number" name="NID" id="NID"><p id="nid-Error"></p></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male" id="gender-male">Male</td>
                <td><input type="radio" name="gender" value="female" id="gender-female">Female <p id="gender-Error"></p></td>
            </tr>
            <tr>
                <td>Hospital Branch:</td>
                <td>
                    <input type="checkbox" id="Dhaka" name="Dhaka" value="Dhaka">Dhaka
                    <input type="checkbox" id="Chittagong" name="Chittagong" value="Chittagong">Chittagong               
                    <input type="checkbox" id="Rajshahi" name="Rajshahi" value="Rajshahi">Rajshahi 
                    <p id="branch-Error"></p>
                </td>
            </tr>
            <tr>
                <td>Choose Working Shift:</td>
                <td>
                    <select name="shift" id="shift">
                        <option value="Day">Day</option>
                        <option value="Night">Night</option>
                    </select>
                    <p id="shift-Error"></p>
                </td>
            </tr>
            <tr>
                <td>Upload your Certificates:</td> 
                <td><input type="file" name="fileToUpload" id="fileToUpload"><p id="file-Error"></p></td>
            </tr>
            <tr>
                <td>Upload your image:</td> 
                <td><input type="file" name="imageToUpload" id="imageToUpload"><p id="image-Error"></p></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address" id="address" cols="30" rows="10"></textarea><p id="address-Error"></p></td>
            </tr>
            <tr>
                <td><input class="btn" type="submit" value="Submit" name="submit"></td>
                <td><input class="btn" type="reset" value="Reset" name="reset"></td>
            </tr>
        </table>
    </form>
    <h4 class="m">Already have an account?</h4>
    <a class="m" href="../view/login.php"><input class="btn" type="button" value="Sign In"></a>
    
</body>
</html>