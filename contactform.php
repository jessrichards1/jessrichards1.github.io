<?php

if (isset($_Post['submit'])) {
  $name = $_Post['name'];
  $company = $_Post['company'];
  $address = $_Post['address'];
  $city = $_Post['city'];
  $state = $_Post['state'];
  $zipcode = $_Post['zipcode'];
  $phone = $_Post['phone'];
  $fax = $_Post['fax'];
  $email = $_Post['email'];
  $message = $_Post['message'];




$mailTo = "cwetzel@splawoffice.com";
$headers = "Contact Page Submission";
$txt = "You have recieved and email from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: contact.html?mailsend");

}






?>
