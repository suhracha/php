<html>
<head>
<title>Email Using PHP</title>
</head>
<body>

<?php
$to_email = "jija0301v@gmail.com";
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From:jija0301v@gmail.com';
$retvalue=mail($to_email,$subject,$message,$headers);
echo $retvalue;
if( $retvalue == true ) {
            echo "Message sent successfully...";
}else {
            echo "Message could not be sent...";
         }
?>

</body>
</html>