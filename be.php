<?php
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

    $to = "gouravrajputpersonal@gmail.com";
    $subject = "Mail From Website";
    $txt = "Name = ".$name . "\r\n Email =".$email . "\r\n Subject = ".$subject . "\r\n Message =".$message;
    $headers = "From: $noreply@Gourav.Tech". \r\n";
    $header("Location: Gourav.tech");
?>