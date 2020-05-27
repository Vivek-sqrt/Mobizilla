<?php
        include 'includes/modal.php';
        ?>
<footer class="footernew">
    <div class="container" style="font-size: 15px">
        <div class="row">
            <div class="columnf">
              <h3>Information</h3>
                <p><a href="about_us.php"><span style="color:black">About Us</span></a></p>
                <p><a href="contact_us.php"><span style="color:black">Contact Us</span></a></p>
            </div>

            <div class="columnf">
              <h3>My Account</h3>
                <?php
                if(!isset($_SESSION['email'])){
                    ?>
                <p><a href="#" data-toggle="modal" data-target="#loginmodal" ><span style="color:black">Log In</span></a></p>
                <p><a href="signup.php"><span style="color:black">Sign Up</span></a></p>
                    <?php
                }else{
                ?>

                <p><a href="logout_script.php"><span style="color:black">Logout</span></a></li>

                <?php
                }
              ?>
            </div>

            <div class="columnf">
              <h3>Contact Us</h3>
                <p>CONTACT No.&nbsp;&nbsp;&nbsp;&nbsp;(020) 68554-89771</p>
                <p>Mobizilla.com &copy; 2020.  All Rights Reserved.</p>
            </div>
        </div>
        
    </div>
</footer>
