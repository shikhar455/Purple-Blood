<?php
include 'connect/config.php';
?>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['number'];
	$message=$_POST['message'];
	
	$to='shishirrc2@gmail.com';
	$subject='Form submission';
	$message="Name: ".$name."\n"."Contact No:".$phone."\n"."Message:".$message."\n";
	$headers="From: ".$email;
	
	if(mail($to, $subject, $message, $headers))
	{
		echo "hello";
	}
}
?>