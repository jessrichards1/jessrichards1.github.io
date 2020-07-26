<?php

$name = $_POST['name'];
$company = $_POST['company'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent=" From: $name \n Company: $company \n Address: $address \n City: $city \n State: $state \n Zip code: $zipcode  \n Phone: $phone \n Fax: $fax \n E-mail: $email \n Message: $message";

$subject = "Contact Form";
$mailTo = "info@splawoffice.com";
$mailHeaders = "From: " . $name . "<". $email .">\r\n";

mail($mailTo, $subject, $formcontent, $mailHeaders) or die("Error!");

echo "Thank you, $name! Your message has been sent.";
echo '<meta http-equiv="refresh" content="5; url=contact.html?mailsend">';
?>
