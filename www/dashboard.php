<?php
  if(isset($_POST['login']))
  {
    require('mysqli_conn.php');
  }
  session_start();
  if($_SESSION['id'])
  {
    //echo $_SESSION['id'].'success';
  }
  else {
      header('Location:client_login.php');
      echo $_SESSION['id'].'fail';
  }
 ?>
 
<html>
<head>
</head>
<body>
<h1>Welcome to Seed</h1>
</br>
<ul>
 <li><a href="logout.php">logout</a></li>
 <li><a href="client_login.php">login</a></li>
 <li><a href="client_register.php">register Company</a></li>
 <li><a href="test_multi_to.php">mail</a></li>
 <li><a href=" fetch_customer.php">see customers</a></li>
 <li><a href=" customer_register.php">add customers</a></li>
<li><a href="way2sms/index.php">message</a></li>


 <ul>
</body>
</html>