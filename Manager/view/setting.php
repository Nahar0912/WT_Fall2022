<?php
session_start(); 

include('../Controller/update_check.php');
include('../Controller/delete_info.php');


if(empty($_SESSION["username"]))
{
  header("Location: logout.php"); 
}

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../Css/setting.css">
  </head>
<body>
  <?php
    include("../view/header.php");
  ?>
  <h2>Your information</h2>

  <h3> Welcome <?php echo $_SESSION["username"];?></h3>
  <br><br>
  <?php
  $radio1=$radio2=$radio3="";
  $firstname=$email="";
  $connection = new db();
  $conobj=$connection->OpenCon();

  $userQuery=$connection->CheckUser($conobj,"user",$_SESSION["username"],$_SESSION["password"]);

  if ($userQuery->num_rows > 0) {
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["name"];
      $email=$row["email"];
      if($row["gender"]=="male" ){
          $radio1="checked"; 
        }
      elseif($row["gender"]=="female"){
        $radio2="checked";
      }
      $phone=$row["phone"];
    } 
  }
  else {
    echo "0 results";
  }
  ?>


  <form action='' method='post'>
  Username : <input type='text' name='username' value="<?php echo $firstname; ?>" ><br><br>

  email : <input type='text' name='email' value="<?php echo $email; ?>" ><br><br>
  Phone:<input type="text" name="phone" id="" value="<?php echo $phone; ?>"><br><br>
  Gender:
      <input type='radio' name='gender' value='male'<?php echo $radio1; ?>>male
      <input type='radio' name='gender' value='female' <?php echo $radio2; ?> >female <br><br>
      
      <input name='update' type='submit' value='Update'>  
      <input name='delete' type='submit' value='Delete Account'>  
      <a href="../Controller/user_info.php"><input type="button" value="Show"></a>
      <button type="button" class="button" id="ajex" onclick="loadAjex()">Request data</button>

      <?php echo $error; ?>
  <br>
  <br>
  <a href="./portal.php"><input type="button" value="Back"></a>

  <a href="./logout.php"><input type="button" value="logout"></a>

</body>
</html>
