<?php
  if (isset($_POST['email'])) {

    // Email information
    $admin_email = "macedojsk@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Send email 
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);

    header('Location: http://127.0.0.1:5500/success.html');
  }