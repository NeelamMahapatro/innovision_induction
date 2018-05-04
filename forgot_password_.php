<?php 
	require_once'dbconnect.php';
	if(isset($_POST["forgot_password"]))
	{
		if(!empty($_POST["email"]))
		{
			$email=trim($_POST["email"]);
		}
		else
		{
			header('location:forgot_password.php?error_message = "<li>E-mail is required</li>"');
		}
		if(empty($error_message))
		{
			$query = "SELECT name,email from student WHERE email = '$email'";
			$query_result = mysqli_query($con, $query) or die(mysqli_error($con));
			$user = mysqli_fetch_array($query_result);
		}
		if(!empty($user))
		{
			//$msg="yes";
			//echo "<script type='text/javascript'>alert($msg);</script>";
			require_once 'forgot_password_mail.php';
		}
		else
		{
			header('location:forgot_password.php?error_message="No e-mail found"');
		}
	}

?>