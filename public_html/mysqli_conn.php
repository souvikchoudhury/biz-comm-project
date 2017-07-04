<?php
  $user = 'purefiam_seed1';
  $pass = 12345;
  $host = 'localhost';
  $db = 'purefiam_seed';

  if($dbcon = mysqli_connect($host,$user,$pass,$db))
  {
    //echo "database connected";
  }
    else {
          die('error');
        }


 ?>
