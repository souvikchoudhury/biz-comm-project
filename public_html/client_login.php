<?php
require ('mysqli_conn.php');
  if(isset($_POST['login'])){
    echo "in login".'<br>';
    if(isset($_POST['comp_email'])&&$_POST['comp_pass'])
    {
      echo "string".'<br>'.'<br>';
      $comp_email = mysqli_real_escape_string($dbcon,$_POST['comp_email']);
      $comp_pass = mysqli_real_escape_string($dbcon,$_POST['comp_pass']);
      $pass_hash = md5($comp_pass);
      echo $pass_hash.'<br>';
      $query = "SELECT * FROM seed_clients WHERE comp_email='$comp_email'";
      $query_run = mysqli_query($dbcon,$query);
      $row = $query_run->fetch_array(MYSQLI_BOTH);
      //echo $row['comp_pass'];
        if($row['comp_pass']==$pass_hash)
    //if(password_verify($pass_hash,$row['comp_pass']))
      {
        echo "welcome ".$row['comp_name'];
        session_start();
        $_SESSION["id"]=$row['id'];
        header('Location:dashboard.php');
      }
      else {
        echo "login failed<br>incorrect credentials";
      }
  }

//
}

 ?>

<form action="client_login.php" method="post">
<input type="email" name="comp_email" placeholder="Enter email-id" required><br>
<input type="password" name="comp_pass" placeholder="enter your password" required><br>
<input type="submit" value="login" name="login">

</form>
