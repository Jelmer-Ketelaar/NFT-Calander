<?php

$to = 'info@nftgenie.pro';
$subject = $_POST['subject'];
$message = $_POST['message'].' Name: '.$_POST['name'];
$headers = "From: ".$_POST['email'];

mail($to, $subject, $message, $headers);

header('Location: contact.php?m=');