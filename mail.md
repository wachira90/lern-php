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
````

## Send an email with extra headers:
````
<?php
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>

````

## Send an HTML email:

````
<?php
$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>

````
