# php mail

````
<?php
ini_set("SMTP","192.168.200.200");
ini_set("sendmail_from","user-from@example.com");
ini_set("smtp_port","25");

$headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type: text/html; charset=utf8" . "\r\n";
$headers .= "Content-type: text/plain; charset=utf8" . "\r\n";
$headers .= "From: mi-mail-robot@sirivatana.co.th" . "\r\n";
$message = "Testing Email From File PHP Mail";
$to = "user-to@yahoo.com";
$subject = "My subject";

mail($to,$subject,$message,$headers);

echo "Send....Success";
