<?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";

ini_set("include_path", '/home/purefiam/php:' . ini_get("include_path") );
 require_once "Mail.php";
 
 $from = "SEED Software <do-not-reply@purefit.in>";
 $to =$selected;
 $subject =$_POST['subject'];
 $body = $_POST['message'];
 echo $subject;
 echo $body;
 
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



}
}
}
?>
