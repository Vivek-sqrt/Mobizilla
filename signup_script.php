<?php 
	require 'includes/common.php';

	$name = $_POST['name'];
	$name = strip_tags($name); // form injection protection using strip tags
	$email = $_POST['email'];
	$email = strip_tags($email);
	$password = $_POST['password'];
	$password = strip_tags($password);
	$contact = $_POST['contact'];
	$contact = strip_tags($contact);
	$city = $_POST['city'];
	$city = strip_tags($city);
	$address = $_POST['address'];
	$address = strip_tags($address);
	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	if(!preg_match($regex_email, $email)){
		echo "Incorrect email pattern";
	}
	if(strlen($password) < 6){
		echo "Password should have atleast 6 characters";
	}
	$email = mysqli_real_escape_string($con, $email);
	$password = mysqli_real_escape_string($con, $password);
	$password = md5($password);

	$select_query = "SELECT email FROM users where email = '$email'";
	$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
	if(mysqli_num_rows($select_query_result) > 0){
		echo "email address already exists";
	}else{
		$query = "INSERT into users(name,email,password,contact,city,address) values 
		('$name','$email','$password','$contact','$city','$address')";
		$query_result = mysqli_query($con,$query) or die(mysqli_error($con));
		echo " User successfully inserted ";
		$id = mysqli_insert_id($con);
		$_SESSION['user_id'] = $id;
		$_SESSION['email'] = $email;	
		header('location: home.php');	
	}
 ?>