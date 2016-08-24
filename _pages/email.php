---
title: "Email function"
section: home
permalink: /email.php
layout:
search: exclude
---

<?php

$s_name = $_POST['name'];
$s_email = $_POST['email'];
$s_message = $_POST['message'];

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

if(!isset($s_name) || !isset($s_email) || !isset($s_message)) {
  died("Please make sure all required fields (*) are not empty.\n\n");
}

$error = "";

$string_check = "/^[A-Za-z\s.'-]+$/";
if(!preg_match($string_check, $s_name)) {
  $error .= "Invalid name, please re-check and try again.\n\n";
}

$email_check = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_check, $s_email)) {
  $error .= "Invalid email address, please re-check and try again.\n\n";
}

if(strlen($s_message) < 2) {
  $error .= "Invalid message, please re-check and try again.\n\n";
}

if(strlen($error) > 0) {
  died($error);
} else {

  $r_email = "phumin@pebinary.com";
  $r_subject = "Web email from ".clean_string($s_email).";
  $r_message = "Details below:\n\n";
  $r_message .= "Name: ".clean_string($s_name)."\n";
  $r_message .= "Email: ".clean_string($s_email)."\n";
  $r_message .= "Message: ".clean_string($s_message)."\n";
  $headers = 'From: '.$s_email."\r\n" .
             'Reply-To: '.$s_email."\r\n" .
             'X-Mailer: PHP/' . phpversion();
  @mail($r_email, $r_subject, $r_message, $headers);
  sleep(1);
  print "Your message has been sent. Thank you very much. We will get back to you soon.";
  echo "<meta http-equiv='refresh' content=\"3; url=http://www.pebinary.com\">";

}

?>
