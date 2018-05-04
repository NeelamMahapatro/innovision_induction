<html>
    <head>
        <title>LOGIN PAGE</title>
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
        <div class="background_login">
    		<br><br><br><br>
    		<center><h1 style="color: black; height: 50px;">LOGIN FORM</h1></center><br><br>
    		<div class="row">
   				<div class="col-sm-6 col-lg-4 col-lg-offset-4">
   					<form method="POST" action="login_submit.php">
   						<div class= form-group>
   							E-mail: <input type="email" class="form-control" name="email" placeholder=" Enter your email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">  
   						</div>
              <span class="error"> <?php
                      if(isset($_GET["email_error"]) AND $_GET["email_error"]=="Enter valid e-mail")
                      { ?>
                        <p>Enter valid e-mail</p>
                      <?php }  ?>
                </span>
   						<div class="form-group">
   							Password: <input type="password" class="form-control" name="password" required="true" pattern=".{6,}"> 
   						</div>
   						<center><button class="btn-primary" type="Submit" value= "submit" style="width: 80px; height:30px;">LOG IN</button>
              </center>
   					</form>
            <a href="forgot_password.php" style="height: 30px; float: right;">Forgot password?</a>
   				</div> 			
    		</div>
       	</div>
        <br><br><br><br>
        <footer><center><p>COPYRIGHT@innovision.nitrkl.ac.in</p></center></footer>
    </body>
</html>