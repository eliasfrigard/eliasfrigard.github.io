<?php
if(isset($_POST[submit]))
{
	$name = $_POST['name'];
	$emailFrom = $_POST['email'];
	$telephone = $_POST['telephone'];
	$subject = $_POST['subject']
	$message = $_POST['message'];

	$email_from = 'ef222xf@student.lnu.se';
	$email_subject = $_POST['subject']


	$mailTo = "elias_frigard@hotmail.com";
	$headers = "From: ".$emailFrom;
	$txt = "You have recieved an email from ".$name.".\n\n".$message;

	email($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}
