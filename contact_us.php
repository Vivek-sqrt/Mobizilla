<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | Mobizilla</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>

<body style="padding-top: 50px;">

    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>

<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title" style="color: green">LIVE SUPPORT</h1>
		  <h3 style="color: black"><b>24 hours | 7 days a week | 365 days a year | Live Technical Support</b></h3><br>
          <div>
             <p style="color: black;font-size: 20px">
               We will be providing you the live technical support whenever you need it. All your problems will be solved within the minimum possible time. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             </p>
          </div>
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/contact.png" alt="contact us">
        </div>
    </div>


<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2 style="color:green">Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">

                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>

                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>

                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder="Enter your message here..."></textarea>
				    </div>

                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>

        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title" style="color: green">Contact Info</h2>
	               <address style="color: black">
				    <p>53, CX Building</p>
				    <p>Rexg St.</p>
				    <p>London, England</p>
				    <p>Phone:(020) 764-565-487</p>
				    <p>Fax:(011) 4420-5688</p>
				    <p>Email: info@estore.com</p>
	               </address>

	            <div><h2 class="title" style="color: green">Follow Us On&#58;</h2>
                   <a href="http://www.facebook.com/internshala" target="_blank"><img src="./img/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                   <a href="http://www.twitter.com/internshala" target="_blank"><img src="./img/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0 padding-left:10px;"></a>
                   <a href="http://www.instagram.com/vivvekk__._" target="_blank"><img src="./img/instalogo.jpg" alt="intagram logo" style="width:30px; height:30px; border:0 padding-left:20px;"></a>
               </div>
            </div>
        </div>
    </div>
</div>

      <?php include 'includes/footer.php'; ?>
    </body>
</html>
