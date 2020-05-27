<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['oldpassword'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = md5($old_pass);
$old_pass = strip_tags($old_pass);

$new_pass = $_POST['newpassword'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = md5($new_pass);
$new_pass = strip_tags($new_pass);

$new_pass1 = $_POST['re-newpassword'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = md5($new_pass1);
$new_pass1 = strip_tags($new_pass1);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass != $new_pass1) {
	echo "Two passwords do not match";
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        echo "Password updated";
    } else{
    	echo "Wrong old password";
    }
}
?>