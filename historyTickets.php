<?php
include ("header.php");

$connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");


//All of this is to add to cart, but I'm going to change this button's functionality.

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "ticket_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'ticket_id'			=>	$_GET["ticket_id"],
				'date'			=>	$_POST["date"],
				'price'		=>	$_POST["price"],
				'amount'		=>	$_POST["amount"]
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
			'ticket_id'			=>	$_GET["ticket_id"],
			'date'			=>	$_POST["date"],
			'price'		=>	$_POST["price"],
			'amount'		=>	$_POST["amount"]
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
			if($values["ticket_id"] == $_GET["ticket_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
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
        <link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/historystyle.css">
	</head>
	<body>
		<br />

		<input type="submit" name="thursday" value="Thursday" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />
		<input type="submit" name="friday" value="Friday" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />
		<input type="submit" name="saturday" value="Saturday" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />
		<input type="submit" name="sunday" value="Sunday" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />



		<div class="container" style= "border:100px; border-radius: 25px; background-color:#333">
			<br />
			<?php
				//Over here 30478239048902384092384902384023890
				//if(isset($_POST["thursday"])){$query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-26'"; }
				//else if(isset($_POST["friday"])){ $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-27'"; }
				//else if(isset($_POST["saturday"])){ $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-28'"; }
				//else if(isset($_POST["sunday"])){ $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-29'"; }
				$query = "SELECT * FROM tickets WHERE event='History'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>

			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:5px solid black; background-color:#f1f1f1; border-radius:25px; padding:16px;" align="center">

						<p><?php echo $row["date"]; echo " || "; echo $row["time"]?></p>
						<p><?php echo $row["special"]; ?></p>
                        <p>€<?php echo $row["price"]; ?></p>
						<input type="text" name="quantity" value="1" class="form-control" />



						<input type="submit" name="Select ticket" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
	</body>
</html>
