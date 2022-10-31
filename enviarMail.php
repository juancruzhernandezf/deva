<?php

$name = $_POST["fname"];
$visitor_email = $_POST["email"];
$message = $_POST["comment"];
$phone = $_POST["pnumber"];
$email_subject = "New form submission";

$email_from = "contacto@deva.org.ar";
$headers = "From: ". $email_from;
$headers = "Reply-to: ".$visitor_email;
$email_body = nl2br("\n You have received a new message from the user ".$name."\n".
	"Here is the message: ".$message .
	"\n User's phone number: ".$phone."\n");

echo nl2br("Email from: " . $email_from ."\n");
echo nl2br("Email subject: " . $email_subject."\n");
echo nl2br("Email body: " . $email_body);
echo nl2br("Email headers: " . $headers . "\n");

if ( mail($email_from,$email_subject,$email_body,$headers)){
	echo "Enviado correctamente";
}
else {
	echo "Error";
}

?>