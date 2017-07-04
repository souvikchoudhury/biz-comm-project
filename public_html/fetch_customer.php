<?php
  require('mysqli_conn.php');
$query="SELECT * FROM user_demo";
if($query_run = mysqli_query($dbcon,$query))
{
//  echo "y";

  while($queryrow = mysqli_fetch_assoc($query_run))
  {
      $id = $queryrow['user_id'];
      $username = $queryrow['username'];
      $email = $queryrow['email'];
    //echo 'id of '.$username.' is '.$id.' and has email id '.$email.'</br>';
    echo'<p><a href="#">'.$username.'</a> =>   '.$email.'</br></p><input type="checkbox"><hr>';
  }
}else {
  {
  echo "n";
}
}

 ?>
