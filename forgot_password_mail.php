<?php
//code for sending mail 
require_once 'vendor/autoload.php';
echo "here";
define ("PROJECT_NAME","http://localhost:1234/Innovision/");
include 'vendor\PHPmailer\PHPmailer\src\PHPmailer.php';
$mail = new PHPmailer\PHPmailer\PHPmailer;
//Enable SMTP debug mode
$mail->SMTPDebug = 0;
// set PHPMailer to use SMTP
$mail->isSMTP();
// set host name
$mail->Host = "smtp.gmail.com";
// set this true if SMTP host requires authentication to send mail
$mail->SMTPAuth = true;
// provide username and password
$mail->Username = "lizamahapatro123@gmail.com";
$mail->Password = "qwerty@123";
$mail->SMTPSecure = "ssl";
$mail->Port = 587;

$mail->From = "lizamahapatro123@gmail.com";
$mail->FromName = "Liza Mahapatro";
$mail->addAddress($_POST["email"]);
$mail->isHTML(true);

$mail->Subject = "Forgot password recovery";
$mail->Body = "<div>".$user[0]."<br><br><p>Click here to recover your password<br><a href ='".PROJECT_NAME."resetpassword.php?name=".$user[0]."'>".PROJECT_NAME."resetpassword.php?name=".$user[0]."</a><br><br></p>Regards<br>Admin.</div>";
echo "";
	if(!$mail->send())
	{
		echo "Mailer Error : ".$mail->ErrorInfo;
		//header('location:forgot_password.php?error_message = "Mailer Error : ".$mail->ErrorInfo;');
	}
	else
	{
		echo "mail sent;";
		header('location:resetpassword.php?success_message = Message has been sent successfully');
		header('location:resetpassword.php?email = $_POST["email"]');
	}

