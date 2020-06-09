<?php
include ("header.php");

$connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/historystyle.css">
		<script type="text/javascript" src="js/jazzScript.js" ></script>
	</head>
	<body>
		<br />

		<form method="POST" style="margin-left: -22%;">
			<input type="submit" name="thursday" value="Thursday 26/07" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 25%" align="center" />
			<input type="submit" name="friday" value="Friday 27/07" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />
			<input type="submit" name="saturday" value="Saturday 28/07" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />
			<input type="submit" name="sunday" value="Sunday 29/07" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />
		</form>

		<br></br>

		<div class="container" style= "border:100px; border-radius: 25px; background-color:#333">
			<br />
			<?php
				//Determine if one of the buttons was pressed.
				if(isset($_POST["thursday"])){$query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-26'"; }
				else if(isset($_POST["friday"])){ $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-27'"; }
				else if(isset($_POST["saturday"])){ $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-28'"; }
				else if(isset($_POST["sunday"])){ $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-29'"; }
				else { $query = "SELECT * FROM tickets WHERE event='History'"; }
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>

			<div class="col-md-4">
				<form>
				<div style="border:5px solid black; background-color:#f1f1f1; border-radius:25px; padding:16px;" align="center">

						<p><?php echo $row["date"]; echo " || "; echo $row["time"]?></p>
						<p><?php echo $row["special"]; ?></p>
                        <p>€<?php echo number_format($row["price"], 2, '.', '');?></p>
						
						<div>
                     	 Amount: 
                          <br> 
                     	 <button class="qtyBtn" onclick="increase_by_one('qty1','qty1send','qty6send');">+</button>
                       		 <input id="qty1" type="text" value="1" name="J1" style="width:10%;"/>                          
                     	 <button class="qtyBtn" onclick="decrease_by_one('qty1','qty1send');">-</button>
                    	</div>
						
						<?php
						//$historyTicket->stockAvalabilityJazz($row["stock"]); ?>
                    		<br>
                    		<form action="AddToCartAction.php" method="POST">                     
                      		<input id="qty1send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      		<input type="hidden" name="ticket_id" value="<?php echo $row["id"]; ?>">
                      		<input type="hidden" name="tkt_price" value="<?php echo $row["price"]; ?>">
                      		<input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      		<button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    	</form>	
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
	</body>
	<br></br>
	<div>
		<?php include "footer.php"; ?>
	</div>
</html>