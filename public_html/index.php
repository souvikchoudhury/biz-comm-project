<?php
ini_set("include_path", '/home/purefiam/php:' . ini_get("include_path") );
 require_once "Mail.php";
 
 $from = "Souvik <souvik@purefit.in>";
 $to = "Rushika Jain <rushika.jain08@gmail.com>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you? wishing you luck";
 
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
   echo("<p>Rushika Jain You are a Chutiya!</p>");
  }
 ?>