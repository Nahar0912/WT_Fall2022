<?php
session_start(); 

include('../Process/updatecheck.php');


if(empty($_SESSION["username"]))
{
  header("Location: ../view/login.php");
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>

<?php
$radio1=$radio2=$radio3="";
$username=$email="";
$connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->CheckUser($conobj,"user",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {
  while($row = $userQuery->fetch_assoc()) {
    $username=$row["name"];
    $email=$row["email"];
    
    if($row["gender"]=="female")
    {
      $radio1="checked";
    }
    elseif($row["gender"]=="male")
    {
      $radio2="checked";
    }
    else
    {
      $radio3="checked";
    }
  } 
}
else
{
  echo "0 results";
}
?>


<form action='' method='post'>
username : <input type='text' name='username' value="<?php echo $username; ?>" >

email : <input type='text' name='email' value="<?php echo $email; ?>" >
 Gender:
    <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
    <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
    <input type='radio' name='gender' value='other'<?php echo $radio3; ?> >Other

    <input type='submit' name='update' value='Update'>  

    <?php echo $error; ?>
<br>
<br>
<a href="./home.php"><input type="button" value="Back"></a>
<br>
<a href="./logout.php"><input type="button" value="Logout"></a>

</body>
</html>