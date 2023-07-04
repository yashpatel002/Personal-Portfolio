<?php
error_reporting(0);

  //get data from form  
  
  $name = $_POST['name'];
  $email= $_POST['email'];
  $message= $_POST['message'];
  $subject = $_POST['subject'];
  $to = "ympatel136@gmail.com";
  $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
  $headers = "From: noreply@yashportfolio.com" . "\r\n" .
  "CC: somebodyelse@example.com";
  if($email!=NULL){
      mail($to,$subject,$txt,$headers);
  }

  
  header('Location:index.html');

?>
