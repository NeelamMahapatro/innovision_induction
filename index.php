<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>REGISTRATION PAGE</title>
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
    		<center><h1 style="color: black; height: 50px;">REGISTRATION FORM</h1></center><br><br>
    		<div class="row">
   				<div class="col-sm-6 col-lg-4 col-lg-offset-4">
   					<form method="POST" action="registration.php">
   						<div class= form-group>
   							Name: <input type="text" name="name" class="form-control" placeholder="Enter your Name" required="true">
   						</div>
   						<div class= form-group>
   							E-mail: <input type="email" class="form-control" name="email" placeholder=" Enter your email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">  
   						</div>
   							<span class="error"> <?php
   							      if(isset($_GET["email_error"]) AND $_GET["email_error"]=="Enter valid e-mail")
   							      {	?>
   							      	<p>Enter valid e-mail</p>
   							      <?php } elseif (isset($_GET["email_error"]) AND $_GET["email_error"]=="E-mail id already exists") { ?>
   							      	<p>E-mail id already exists</p>
   							      <?php }  ?>
   							</span>
   						<div class="form-group">
   							Password: <input type="password" class="form-control" name="password" required="true" pattern=".{6,}"> 
   						</div>
   							<span class="error"> <?php
   							      if(isset($_GET["password_error"]) AND $_GET["password_error"]=="Password should contain atleast 6 character" )
   							      { ?>
   							      	<p>Password should contain atleast 6 character</p>
   							      <?php }   ?>
   							</span>
   						<div class="form-group">
   							Contact: <input type="number" class="form-control" name="contact" required="true" pattern="[0-9]{10,}">
   							<span class="error"> <?php
   							      if(isset ($_GET["contact_error"]) AND $_GET["contact_error"]=="enter valid mobile number")
   							      { ?>
   							      	<p>enter valid mobile number</p>
   							      <?php }   ?>
   							</span>
   						</div>
   						<div class="form-group">
   							Institute: <select name="institute" style="height: 40px;width: 475px;">
   								<option>NIT, Rourkela</option>
   								<option>NIT, Raipur</option>
   								<option>VSSUT</option>
   								<option>NIST, Brahmapur</option>
   								<option>NIT, Durgapur</option>
   								<option>CET</option>
   								<option>KIIT</option>
   							</select>
   						</div>
   						<div class="form-group">
   							Address: <textarea rows="3" cols="68" name="address"></textarea>
   						</div>
   						<center><button class="btn-primary" type="Submit" value= "submit" style="width: 80px; height:30px;">Submit</button></center>
   					</form><br>
   					<center><a href="login.php" style="height: 30px;">Already have account?</a></center><br><br><br>
   				</div> 	
   			</div>
   		<br><br><br><br>
       	</div>
       
       <footer><center><p>COPYRIGHT@innovision.nitrkl.ac.in</p></center></footer>
    </body>
</html>