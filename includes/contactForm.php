<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$subject = "Hello";
$mailForm = $_POST['email'];
$message = $_POST['message'];


$mailTo = "y_xia59790@fanshaweonlie.ca";
$headers = "From: noreply@yuchenxia.com". "\r\n";
$headers = 'Reply-To:'.$mailForm;
$txt ="You have received an e-mail from" .$name. ".\n\n".$message;

if (mail($mailTo, $subject, $txt, $headers)) {
	
header("Location:/index.html");
}else {
	echo 'Not send out';
}

}


?>