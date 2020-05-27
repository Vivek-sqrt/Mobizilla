<!DOCTYPE html>
<html>
	<head>
		<title>Forgot Password</title><meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<?php
require("includes/common.php");

$email = $_POST['e-mail'];
$email = strip_tags($email);
$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);
$new_pass = strip_tags($new_pass);

$select_query = "SELECT * FROM users WHERE email = '$email'";

$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result) > 0){
	$update_query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $email . "'";
	mysqli_query($con, $update_query) or die(mysqli_error($con));
	
	// Password sending to email : 


    $email_from = 'admin@estore.com';
    $email_to = $email;

    $body = "The password for your account has been changed. Your new password is ".$new_pass;
    $subject = "Password Changed";

    @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

	?>
	<body class="container">
		<h3 class="text-success text-center">
		Password updated successfully and has been sent to your email address...<br/>Redirecting to home page	
		</h3>
		<?php

		header('refresh:2;url=index.php');

		?>
	<?php
}else{
	?>
	<h3 class="text-danger text-center">
	No user found... Redirecting to home page	
	</h3>
	
	<?php
			header('refresh:2;url=index.php');
}
?>
	</body>
	</html>
