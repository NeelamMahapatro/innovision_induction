<!DOCTYPE html>
<html>
    <head>
        <title>PASSWORD RECOVERY</title>
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
    		<br><br><br><br>
    		<center><h1 style="color: black; height: 50px;">FORGOT PASSWORD?</h1></center><br><br>
        <div class="row">
   				<div class="col-sm-6 col-lg-4 col-lg-offset-4">
            <span class="error"><?php
              if(!empty(isset($_GET["success_message"]))){?>
              <div class="message"><?php echo $success_message; ?></div>
              <?php } 
              elseif(!empty(isset($_GET["error_message"]))){?>
              <div class="message"><?php echo $error_message;?></div>
            <?php
              }
            ?></span>
            <form method="POST" action="forgot_password_.php">
   						<div class= form-group>
   							E-mail: <input type="email" class="form-control" name="email" placeholder=" Enter your email here" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">  
   						</div>
             	<center><button class="btn-primary" type="Submit" name="forgot_password" value="Submit" style="width: 80px; height:30px;">Submit</button>
              </center>
   					</form>
          </div>
          <br><br><br><br> 			
    		</div>
      </div>
        <br><br><br><br>
      <footer><center><p>COPYRIGHT@innovision.nitrkl.ac.in</p></center></footer>
    </body>
</html>