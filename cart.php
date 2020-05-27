<?php
	require "includes/common.php";
?>
<?php
	if(!isset($_SESSION['email'])){
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart | Mobizilla</title>
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
	<br/><br/><br/><br/><br/>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<table class="table table-striped table-hover table-responsive">
					<?php
                        $sum = 0;
                        $id = "";
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS 
                        Name FROM users_items JOIN items ON users_items.item_id = items.id 
                        WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th><b>ITEM NUMBER</b></th>
                                    <th><b>ITEM NAME</b></th>
                                    <th><b>PRICE</b></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            ?>
                            <h3>Add items to the cart first!</h3>
                            <?php
                        }
                    ?>
				</table>
			</div>
		</div>
	</div>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

		<?php
			include "includes/footer.php";
		?>


</body>
</html>