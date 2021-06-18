<?php
  $to="ashlyntherese@gamil.com"
  $Subject="Email from my website"
    
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$POST['comment'];


  $headers .="Content-type: index/html;\r\n";
  $headers .="From: $email";
  
  mail($to, $Subject, $comment, $headers);
  echo "Email has been send ! Thank you $name";
?>
