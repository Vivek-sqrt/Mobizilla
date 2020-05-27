<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Settings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Muli:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	
	<?php
		include 'includes/header.php';
	?>
	<br/><br/><br/>

	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
					<h3 style="color: white">Change Password</h3>
					<form action="settings_script.php" method="POST">
						<div class="form-group">
							<input type="password" name="oldpassword" class="form-control" placeholder="Old Password" required="true">
						</div>
						<div class="form-group">
							<input type="password" name="newpassword" class="form-control" placeholder="New Password" required="true">
						</div>
						<div class="form-group">
							<input type="password" name="re-newpassword" class="form-control" placeholder="Re-type New Password" required="true">
						</div>

						
						<button type="submit" name="submit" class="btn btn-primary">Change</button>
						
					</form><br/>
			</div>
		</div>
	</div>
<br><br><br><br><br><br><br><br><br>

		<?php
			include "includes/footer.php";
		?>
</body>
</html>