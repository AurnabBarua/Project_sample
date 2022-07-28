<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
    <link type="text/css" rel="stylesheet" href="./css/mycss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>

<div class="container mt-5 bg-white p-5">
  <h1>Contact Me!</h1>
  <form class="row g-3"  method="post">
    <div class="col-md-6 p-1 bg-dark">
      <label for="FirstName" class="form-label text-white">First Name</label>
      <input type="text" name="f_name" class="form-control" id="FirstName" required>
    </div>
    <div class="col-md-6 bg-dark p-1">
      <label for="LastName" class="form-label text-white">Last Name</label>
      <input type="text" name="l_name" class="form-control" id="LastName" required>
    </div>
    <div class="col-md-8 bg-dark p-1">
        <label for="emailinfo" class="form-label text-white">Email</label>
      <input type="email" name="email" class="form-control" id="emailinfo" placeholder="abc@gmail.com" required>
    </div>
    <div class="col-md-4 bg-dark p-1">
      <label for="phoneNumber" class="form-label text-white">Phone Number</label>
      <input type="text" class="form-control" id="phoneNumber" placeholder="+880-**********">
    </div>
    <div class="col-md-12 bg-dark p-1">
        <label for="comment" class="form-label text-white">Comment, Question?</label>
      <textarea class="form-control" name="message" id="comment"rows="3"></textarea>
    </div>
    <div class="col-md-12">
      <button type="submit" name="submit" class="btn btn-info">Submit</button>
    </div>

  </form>

</div>


<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['submit'])) {
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = "my website";
  $email_subject = "New form submitted";

  $email_body = "User Name: $f_name $l_name.\n User Email: $visitor_email. \n User Message: $message.\n";

  $to = "190204009@aust.edu";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-to: $visitor_email \r\n";
  mail($to, $email_subject, $email_body, $headers);
}

 ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
