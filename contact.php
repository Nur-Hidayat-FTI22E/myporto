<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'forms/phpmailer-master/src/Exception.php';
require 'forms/phpmailer-master/src/PHPMailer.php';
require 'forms/phpmailer-master/src/SMTP.php';

if (isset($_POST["send"])) {
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'kittylife001@gmail.com';
  $mail->Password = 'oloaqejdtwklqsoh';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 2525;

  $mail->setFrom('kittylife001@gmail.com');

  $mail->addAddress($_POST["email"]);

  $mail->isHTML(true);

  $mail->Subject = $_POST["subject"];
  $mail->Body = $_POST["message"];

  $mail->send();

  echo
  "
  <script>
  alert('Sent Successfully');
  document.locaiton.href = 'index.php';
  </script>
  ";
} else {
  die(mysqli_error());
}


?>