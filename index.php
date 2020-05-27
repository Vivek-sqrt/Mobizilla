<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | Mobizilla</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Muli:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body style="padding-top: 50px;">

        <?php
        include 'includes/header.php';
        ?>

        <div id="content">
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content" style="border: solid black 1px">
                            <h1 style="color: #FFFAFA">MOBIZILLA</h1>
                            <h3 style="color: #EEE">The only mobile store you need</h3>
                            <h4 style="color: #EEE"><p>Flat &nbsp;15 %&nbsp;&nbsp;discount&nbsp;&nbsp;on all products.</p></h4>
                            <br>
                            <br>
                            <a style="border: solid black 1px" href="home.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
        </div>

        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
