<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "maasongmx@gmail.com";
$subject = "mkao.info.tm mail";

mail ($to, $subject, $message, "From: " . $first_name . $last_name);
echo "Your message has been sent.";


?>