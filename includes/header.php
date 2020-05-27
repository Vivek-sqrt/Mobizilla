<?php
include 'includes/modal.php';
include 'includes/common.php';
?>
<div class="navbar navbar-fixed-top headernew">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar" style="background-color:  black;"></span>
				<span class="icon-bar" style="background-color:  black;"></span>
				<span class="icon-bar" style="background-color:  black;"></span>				
			</button>
			<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-phone">MOBIZILLA</span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<?php
				if(isset($_SESSION['email'])){
				?>
				<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
				<li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>
				<li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
				<?php
			}else{
				?>

<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                    <li><a href="contact_us.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <li><a href="about_us.php"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>

         	
			<?php
			}
			?>
		</ul>
		</div>
	</div>
</div>