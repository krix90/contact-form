<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "info@skygas.kz";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n email = " . $email . "\r\n subject = " . $subject . "\r\n message =" . $message;
$headers = "From: " . $email . "\r\n" . "\r\n" . "CC: " . $to;
mail($to,$subject,$txt,$headers);


?>