<?php
//  if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['phone']))
if(isset($_POST['submit']))
  {
    require('mysqli_conn.php');

    $username = mysqli_real_escape_string($dbcon,$_POST['username']);
    $email =  mysqli_real_escape_string($dbcon,$_POST['email']);
    $phone =  mysqli_real_escape_string($dbcon,$_POST['phone']);
    //echo "isset";

    if(!empty($username)&&!empty($email)&&!empty($phone))
    {
      //echo $username.' '.$email.' '.$phone;
      //check if mail id or phone number already exists in database

        $query = "INSERT INTO user_demo(username,email,phone)VALUES('$username','$email','$phone')";
        if($query_run = mysqli_query($dbcon,$query))
        {
          echo 'registration succesfull';
        }


    }
  }
  else {
    echo "error";
  }
 ?>








<form action="customer_register.php" method="post">
  <input type="text" name="username" placeholder="name" required></br>
  <input type="email" name="email" placeholder="email" required></br>
  <input type="phone" name="phone" placeholder="phone no" required></br>

  <input type="submit" value="submit" name="submit"></br>

</form>
