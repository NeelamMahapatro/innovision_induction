<?php
	require_once 'dbconnect.php';
	if(isset($_POST['confirm_password']))
	{
		$email=$_GET['email'];
		$password = trim($_POST["password"]);
		$confirmpassword = trim($_POST["confirmpassword"]);
		if($password == $confirmpassword)
		{
			$password = password_hash($password,PASSWORD_DEFAULT);
			$query = "UPDATE student SET password= '$password' WHERE email= '$email'";
			$query_result = mysqli_query($con,$query) or die(mysqli_error($con));
    		$aff_row = mysqli_num_rows($query_result);    
			if($aff_row)
			{
				$success_message = "Password has been updated successfully.<br>Now you are redirecting";
				header("Refresh:3; url=index.php");
			}
			else
			{
				$error_message = "Failed : <br> Password not updated";
			}
		}else
		{
			$error_message= "Password not matched";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>RESET PASSWORD</title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="container-fluid">
		<div class="background_reset">
    		<br><br><br><br>
    		<center><h1 style="color: black; height: 50px;">RESET PASSWORD?</h1></center><br><br>
        <div class="row">
   				<div class="col-sm-6 col-lg-4 col-lg-offset-4">
            <?php
              if(!empty(isset($success_message))){?>
              <div class="message"><?php echo $success_message; ?></div>
              <?php } ?>
   					<?php 
              if(!empty(isset($error_message)))
              {?>
                <p><?php echo $error_message;?></p>
            <?php
              }
            ?>
            <form method="POST" name="confirmpassword" id="confirmpassword">
   				<div class= form-group>
   					Password: <input type="password" class="form-control" name="password" placeholder=" Enter your password" required="true" pattern=".{6,}">  
   				</div>
   				<div class= form-group>
   					Password: <input type="password" class="form-control" name="confirmpassword" placeholder=" Re-enter your password" required="true" pattern=".{6,}">  
   				</div>
             	<center><button class="btn-primary" type="Submit" name="confirm_password" value="Submit" style="width: 80px; height:30px;">Confirm</button>
              </center>
   			</form>
        <br><br><br><br>
        </div> 			
    	</div>
      </div>
  </div>

  <footer><center><p>COPYRIGHT@innovision.nitrkl.ac.in</p></center></footer>
</body>
</html>