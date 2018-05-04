<?php 
	include 'dbconnect.php';
	$name=$_POST["name"];
	$email = mysqli_real_escape_string($con, $_POST['email']);
    $regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
    if (!preg_match($regex_email, $email)) {
        header('location: index.php?email_error = Enter valid e-mail');
        }
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password_encrypted = md5($password);
    if (strlen($password) < 6) {
         header('location: index.php?password_error=Password should contain atleast 6 character');
        }
    $contact = $_POST['contact'];
    if (strlen($contact) < 10) {
         header("location: index.php?contact_error=enter valid mobile number");
        }
    $institute=$_POST["institute"];
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $select_query_check = "SELECT student_id FROM student WHERE email='$email'";
    $select_query_check_result = mysqli_query($con, $select_query_check) or die(mysqli_error($con));
    $row = mysqli_num_rows($select_query_check_result);
    if($row>0)
    {
        header('location: index.php?email_error = E-mail id already exists');
    }
    else {
    $insert_query =  "INSERT  into student(name, email, password, contact, institute, address) values ('$name', '$email', '$password_encrypted', '$contact', '$institute', '$address')";
    $insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    $student_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['student_id'] = $student_id;
        header('location: login_after.php');
        
    	}   
?>