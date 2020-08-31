<?php 
//session_start();
include ("header.php");
//session_start();
//echo "<script>alert('$email');</script>"; 
include("config.php");
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "p_id");
		if(!in_array($_GET["p_id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["p_id"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'p_id'			=>	$_GET["p_id"],
            'p_name'			=>	$_POST["hidden_name"],
            'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["p_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="deals.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
			<br /><br />
			<br /><br />
			<br /><br />			<br />
			<br />
            <div class="product-container">
                        <div class="m-0 row-cols-2 row-cols-xs-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 row">
		<?php
				$query = "SELECT * FROM adminproducts ORDER BY p_id ASC ";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
                        $p_id= $row['p_id'];   
                                        $result2 = mysqli_query($con,"SELECT  `product_id`, `sell_price` FROM `admin_product_to_store` where `product_id` = $p_id  ");                                    
                                        while($row2 = mysqli_fetch_array($result2)) 
                                        {
                                            $sell_price= $row2['sell_price'];   
                                   //          echo $sell_price."<br>"; 
                                              $product_id= $row2['product_id'];   
                                              // echo $product_id."<br>"; 
				?>
			<!-- <div class="col-md-4">
				<form method="post" action="deals.php?action=add&p_id=<?php echo $row["p_id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="<?php echo $row["p_image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["p_name"]; ?></h4>
                        <h4 class="text-info"><?php echo $row2["sell_price"]; ?></h4>
						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>" />
                        <input type="hidden" name="hidden_price" value="<?php echo $row2["sell_price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
            </div> -->
            <form method="post" action="deals.php?action=add&p_id=<?php echo $row["p_id"]; ?>">
            <div class="col" style="padding-bottom: 15px;">
                        <div class="product-card-container">
                                       <div class="row">
                                                <div class="product-card-image-container col-md-12">
                                                <img class="img-fluid" src="<?php echo $row["p_image"];; ?>">
                                                    <div class="product-card-promotion-badge">
                                                        <div class="product-card-promotion-badge-nexus">
                                                            <!-- <img class="img-fluid" src="/static/media/Nexus.0af60875.png"> -->
                                                        </div>
                                                        <div class="product-card-promotion-badge-single-line">
                                                            <div class="product-card-promotion-badge-percentage">29</div>
                                                            <div>
                                                                <div class="product-card-promotion-badge-suffix">%</div>
                                                                <div class="product-card-promotion-badge-suffix">Off</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card-name col-md-12"><?php echo $row["p_name"]; ?></div>
                                                <div class="product-card-price-container col-md-12">
                                                    <div class="product-card-original-price"><?php echo $row2["sell_price"]; ?></div>
                                                    <div class="product-card-final-price">Rs 138.00 / Unit</div>
                                                </div>
                                                <div class="product-card-button-container col-md-12">
                                                <!-- <input type="button" onclick="sayHello()" value="Click" /> -->
                                                <input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>" />
                        <input type="hidden" name="hidden_price" value="<?php echo $row2["sell_price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="product-card-button-add btn btn-primary btn-block" value="Add to Cart" />
                                                <!-- <input type="button" class="product-card-button-add btn btn-primary btn-block" onclick="display()" value="Add to Cart" /> -->
                                        </input></div>
                                            </div>
                  	</div>
				</form>
            </div>
            
            <?php
            
                    }
                }
				}
            ?>
                                  </div>
                                    </div>

				
	<br />
	</body>
</html>
