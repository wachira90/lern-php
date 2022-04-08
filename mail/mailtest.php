<?php

ini_set("SMTP","172.16.1.5");
ini_set("sendmail_from","mi-mail-robot@example.com");
ini_set("smtp_port","1025");

date_default_timezone_set('Asia/Bangkok');

$date 		= date("Y-m-d H:i:s");

$headers 	= "MIME-Version: 1.0" . "\r\n";
$headers 	.= "Content-type: text/html; charset=utf8" . "\r\n";
$headers 	.= "From: mi-mail-robot@example.com" . "\r\n";

$to 		= "wachira@example.com";
$subject 	= "Subject php test send email {$date}";
$message	= "Testing Email From File PHP Mail {$date}";


try {
	mail($to, $subject, $message, $headers);
	echo "Send....Success {$date}";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

