<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  if(isset($_POST['submit'])){

    $userName = $_POST['name'];
  $userEmail = $_POST['email'];
  $userOrg = $_POST['Organization'];
  $userPhone = $_POST['phone'];
  $userLocation = $_POST['location'];
  $userMessage = $_POST['message'];
  }
  

  $to = 'adelekeayobami13@gmail.com';
  $body = "";

  $body .= "From: ".$userName. "\r\n";
  $body .= "Email: ".$userEmail. "\r\n";
  $body .= "Location: ".$userLocation. "\r\n";
  $body .= "Organization: ".$userOrg. "\r\n";
  $body .= "Phone: ".$userPhone. "\r\n";
  $body .= "Message: ".$userMessage. "\r\n";
  $headers = "From:". $userName;


  mail($to,$userEmail,$body, $headers);
  header("Location:contact.php?mailsend");
  ?>
  

 

  

