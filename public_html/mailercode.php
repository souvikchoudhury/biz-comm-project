<?php
ini_set("include_path", '/home/purefiam/php:' . ini_get("include_path") );
 require_once "Mail.php";
 
 $from = "SEED Software <do-not-reply@purefit.in>";
 $to = $_POST['to'];
 $subject =$_POST['subject'];
 $body = $_POST['message'];
 
 $host = "mail.purefit.in";
 $username = "souvik@purefit.in";
 $password = "invader2007";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   	echo("<p>Message successfully sent!</p>");
   	header('location:dashboard.php');
  }
 ?>