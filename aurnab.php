<?php


  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  print("hmm kaj kore");

  $email_from = "my website";
  $email_subject = "New form submitted";

  $email_body = "User Name: $name.\n".
                "User Email: $visitor_email. \n".
                "User Message: $message.\n";

  $to = "aurnabbarua02@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-to: $visitor_email \r\n";
  mail($to, $email_subject, $email_body, $headers);
  header("Location: Contact Form Page.html");
 ?>
