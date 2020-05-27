<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up | Mobizilla</title>
        <link rel="shortcut icon" href="./img/srtcticon.png" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Muli:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
      
</head>

<body>
    <?php include "includes/header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
               <img src="./img/mobile.jpg">
            </div>

            <div class="col-sm-5">

                <h2 style="color:green" >SIGN UP</h2>
                <hr/>

                    <form  action="signup_script.php" method="POST">

                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-sm-10" style="color: black">
                            <hr/>
                                  Already have an account ?<a href="#" data-toggle="modal" data-target="#loginmodal"> Login</a>
                        </div>

                </form>
        </div>
    </div>
    </div>
</br>
</br>
</br>
      <?php include "includes/footer.php"; ?>
    </body>
</html>
