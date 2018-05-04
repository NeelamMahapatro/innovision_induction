<?php
    include 'dbconnect.php';
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_email, $email)) {
        header('location: login.php?email_error= Enter valid e-mail');
        }
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password_encrypted = md5($password);
    $select_query = "SELECT student_id, email, password FROM student WHERE email='$email' and password='$password_encrypted'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row = mysqli_num_rows($select_query_result);    
    if($row==0)
    {
        echo "Invalid Login!";
    }
    else{
        $row_ = mysqli_fetch_array($select_query_result);
        $_SESSION['email'] = $row_['email'];
        $_SESSION['student_id'] = $row_['student_id'];
        header('location: login_after.php');
        session_start();
    }
?>




