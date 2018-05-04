<?php
 	$con=mysqli_connect("localhost","root","Liza@123");
        if(!$con)
          {
            die("not connected");
          }
         $dbstatus=mysqli_select_db($con,"innovision");
         if(!$dbstatus)
	{
	 die("database not found");
	} 
?>
