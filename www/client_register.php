<?php

require('mysqli_conn.php');
//echo "string";
if(isset($_POST['register']))
  {
    if(isset($_POST['comp_name'])&&isset($_POST['comp_email'])&&isset($_POST['contact_no']))
    {
                      $comp_name = mysqli_real_escape_string($dbcon,$_POST['comp_name']);
                      $comp_email =  mysqli_real_escape_string($dbcon,$_POST['comp_email']);
                      $comp_pass =  mysqli_real_escape_string($dbcon,$_POST['comp_pass']);
                      $contact_no =  mysqli_real_escape_string($dbcon,$_POST['contact_no']);

                      $liscence = rand(100000000,999999999);
                    //  echo $liscence;

                        if(!empty($comp_name)&&!empty($comp_email)&&!empty($comp_pass)&&!empty($contact_no))
                          {
                              //echo $comp_name.' '.$comp_email.' '.$contact_no;
                              //check if mail id or phone number already exists in database
                              $pass_hash = md5($comp_pass);
                                    $query = "INSERT INTO seed_clients (comp_name,comp_email,contact_no,comp_pass,liscence)VALUES('$comp_name','$comp_email','$contact_no','$pass_hash','$liscence')";
                                    if($query_run = mysqli_query($dbcon,$query))
                                            {
                                              echo 'registration succesfull';
                                              header('Location:client_login.php');
                                            }
                                      else {
                                        echo "registeration failed";
                                      }
                            }
        }
    }
  else{
  //  echo("connection error  ".mysqli_connect_error());
    }

 ?>

<form action="client_register.php" method="post">
  <input type="text" name="comp_name" placeholder="Company Name" required></br>
  <input type="email" name="comp_email" placeholder="Company email" required></br>
  <input type="password" name="comp_pass" placeholder="Password" required></br>
  <input type="phone" name="contact_no" placeholder="Phone Nmber" required></br>

  <input type="submit" value="register" name="register"></br>

</form>
