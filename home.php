<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
   
<head>
        <title>Mobile | Mobizilla</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Muli:wght@600&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
    
    
</head>
   
<body style="padding-top: 50px;">
            <!-- Header file -->
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>
    <br>
    <br>
    
    <div class="container">
        
            <div class="jumbotron home-spacer" id="products-jumbotron" style="border: solid 1px black">
                <center><h1>Welcome to MOBIZILLA</h1>
                <p>Buy among the best available mobile products in the world...</p>
              </center>
            </div>
            <hr>
            <br>
            
        <div class="row">

            
            <div class="col-sm-12 text-center">
                <div class="panel-group">
                    
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <div class="text-center">
                                    <h3>APPLE iPhone X</h3>
                                </div>
                                <img src="./img/iphonex.png" alt="iphone x" >
                                    <div class="caption">
                                        <p>
                                            5.8" 1125x2436 pixels 12MP 2160p camera 3GB RAM 2716mAh battery
                                        </p>
                                        <p>Price: Rs. 78000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <div class="text-center">
                                    <h3>APPLE iPhone 7 PLUS</h3>
                                </div>
                                <img src="./img/ipnone7plus.png" alt="ipnone 7 plus">
                                    <div class="caption">
                                        <p>
                                            5.5" 1080x1920 pixels 12MP 2160p camera 3GB RAM 2900mAh battery
                                        </p>
                                            <p>Price: Rs. 53000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <div class="text-center">
                                    <h3>APPLE iPhone 7</h3>
                                </div>
                            <img src="./img/iphone7.png" alt="iphone 7">
                                <div class="caption">
                                        <p>
                                            4.7" 750x1334 pixels 12MP 2160p camera 2GB RAM 1960mAh battery
                                        </p>
                                        <p>Price: Rs. 30000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                           
                                            if (check_if_added_to_cart(2)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <div class="text-center">
                                    <h3>APPLE iPhone 6S +</h3>
                                </div>
                            <img src="./img/iphone6splus.png" alt="iphone 6s plus">
                                <div class="caption">
                                        <p>
                                            5.5" 1080x1920 pixels 12MP 2160p camera 2GB RAM 2750mAh battery
                                        </p>
                                        <p>Price: Rs. 22000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(1)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>

                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <div class="text-center">
                                    <h3>SAMSUNG Galaxy S8 +</h3>
                                </div>
                                <img src="./img/samsungs8.png" alt="galaxy s8 plus" >
                                    <div class="caption">
                                        <p>
                                            6.2" 1080x1920 pixels 32MP 2160p camera 4GB RAM 4500mAh battery
                                        </p>
                                        <p>Price: Rs. 56000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(6)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div> 
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <div class="text-center">
                                    <h3>SAMSUNG Galaxy Note 8 +</h3>
                                </div>
                                <img src="./img/samsungnote8plus.png" alt="note 8 plus">
                                    <div class="caption">
                                            <p>
                                            6.5" 1225x1920 pixels 21MP 1080p camera 6GB RAM 5500mAh battery
                                            </p>
                                            <p>Price: Rs. 77000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(7)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <div class="text-center">
                                    <h3>SAMSUNG Galaxy S7 EDGE</h3>
                                </div>
                            <img src="./img/samsungs7edge.png" alt="galaxy s7 edge">
                                <div class="caption">
                                            <p>
                                            5.5" Super Amoled 12MP 2160p camera 4GB RAM 3000mAh battery
                                            </p>
                                            <p>Price: Rs. 45000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(5)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <div class="text-center">
                                    <h3>SAMSUNG Galaxy A8</h3>
                                </div>
                            <img src="./img/samsunga8.png" alt="galaxy a8">
                                <div class="caption">
                                            <p>
                                            5.7" 1080x1920 pixels 16MP 2160p camera 2GB RAM 3050mAh battery
                                            </p>
                                            <p>Price: Rs. 17000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(8)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>

                   
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <div class="text-center">
                                    <h3>ONE PLUS 5T</h3>
                                </div>
                                <img src="./img/op5t.png" alt="oneplus 5t" >
                                    <div class="caption">
                                            <p>
                                            6.01" 1080x2160 pixels 16MP 2160p camera 6GB RAM 4900mAh battery
                                            </p>
                                            <p>Price: Rs. 26000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {

                                            if (check_if_added_to_cart(12)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <div class="text-center">
                                    <h3>ONE PLUS 5</h3>
                                </div>
                                <img src="./img/op5.png" alt="oneplus 5">
                                    <div class="caption">
                                            <p>
                                            5.5" 1080x1920 pixels 12MP 1080p camera 4GB RAM 4900mAh battery
                                            </p>
                                            <p>Price: Rs. 30000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(11)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <div class="text-center">
                                    <h3>ONE PLUS 3T</h3>
                                </div>
                            <img src="./img/op3t.png" alt="oneplus 3t">
                                <div class="caption">
                                            <p>
                                            5.5" 1080x1920 pixels 12MP 1080p camera 3GB RAM 4000mAh battery
                                            </p>
                                            <p>Price: Rs. 20000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                           
                                            if (check_if_added_to_cart(10)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <div class="text-center">
                                    <h3>ONE PLUS 3</h3>
                                </div>
                            <img src="./img/op3.png" alt="oneplus 3">
                                <div class="caption">
                                            <p>
                                            5.5" 1080x1920 pixels 16MP 1080p camera 4GB RAM 3950mAh battery
                                            </p>
                                            <p>Price: Rs. 28000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(9)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <div class="text-center">
                                    <h3>XIAOMI Mi Mix 2</h3>
                                </div>
                                <img src="./img/mimix2.png" alt="mi mix2" >
                                    <div class="caption">
                                            <p>
                                            5.9" 2160x1080 pixels 32MP 1080p camera 8GB RAM 4000mAh battery
                                            </p>
                                            <p>Price: Rs. 36000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(16)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <div class="text-center">
                                    <h3>XIAOMI Mi Max 2</h3>
                                </div>
                                <img src="./img/mimax2.png" alt="mi max 2">
                                    <div class="caption">
                                            <p>
                                            6.4" 1080x1920 pixels 12MP 1080p camera 4GB RAM 3600mAh battery
                                            </p>
                                            <p>Price: Rs. 12000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(15)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <div class="text-center">
                                    <h3>XIAOMI Mi A1</h3>
                                </div>
                            <img src="./img/mia1.png" alt="mi a1">
                                <div class="caption">
                                            <p>
                                            5.5" 1080x1920 pixels 12MP 1080p camera 4GB RAM 3000mAh battery
                                            </p>
                                            <p>Price: Rs. 10000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(14)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <div class="text-center">
                                    <h3>XIAOMI Redmi Note 4</h3>
                                </div>
                            <img src="./img/redminote4.png" alt="redmi note 4">
                                <div class="caption">
                                            <p>
                                            5.5" 1080x1920 pixels 16MP 1080p camera 4GB RAM 4100mAh battery
                                            </p>
                                            <p>Price: Rs. 14000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(13)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>