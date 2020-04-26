<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name, Phone: $phone, \n Message: $message";
$recipient = "info@aspidontas.lt";
$subject = "Užklausa iš Aspidontas.lt";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Aciu! Jusu zinute buvo issiusta.";
?>