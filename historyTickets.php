<?php
include ("header.php");
include ("AutoLoaderIncl.php");
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
		<h1 style="text-align: center; font-size: 50px"> Historic Tour </h1>
		<br />

		<!-- Get the 4 buttons to select specific dates. -->
		<form method="POST" style="margin-left: -22%;">
			<input type="submit" name="thursday" value="Thursday 26/07" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 25%" align="center" />
			<input type="submit" name="friday" value="Friday 27/07" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />
			<input type="submit" name="saturday" value="Saturday 28/07" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />
			<input type="submit" name="sunday" value="Sunday 29/07" style="border-radius: 25px; border:5px solid black; padding: 16px; margin-left: 10%" align="center" />
		</form>

		<br></br>

		<!-- //Make a container to putt all the tickets in. --> 
		<div class="container" style= "border:100px; border-radius: 25px; background-color:#333">
			<br />

			<?php $formNumber = 0; //Used later ?> 
			<?php
				//Determine if one of the buttons was pressed and filter accordingly
				if(isset($_POST["thursday"])){$query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-26'"; }
				else if(isset($_POST["friday"])){ $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-27'"; }
				else if(isset($_POST["saturday"])){ $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-28'"; }
				else if(isset($_POST["sunday"])){ $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-29'"; }
				//If not, take the basic 
				else { $query = "SELECT * FROM tickets WHERE event='History'"; }
				//Use the gotten query and get a result
				$result = mysqli_query($connect, $query);

				//In the case a result has been given
				if(mysqli_num_rows($result) > 0)
				{
					//For each result, go through the ticket process
					while($row = mysqli_fetch_array($result))
					{
				
					$formNumber = $formNumber + 1; //This variable will be used later to make sure each ticket got their own working button ?>
					
					<!-- Create the box for each ticket and display all the variables on it. -->
					<div class="col-md-4" style="border:5px solid black; background-color:#f1f1f1; border-radius:25px; padding:16px; margin-bottom: 80px; text-align: center">

						<p><?php echo $row["date"]; echo " || "; echo $row["location"]?></p>
						<p><?php echo $row["time"]; ?></p>
						<p><?php echo $row["special"]; ?></p>
                		<p>€<?php echo number_format($row["price"], 2, '.', '');?></p>
						
						<div>
                   			Amount: 
                    		<br> 
							<!-- Create the + and - buttons and use the before established variable to give each ticket their own unique amount number -->
                     		<button type="button" class="qtyBtn" onclick="increase_by_one('<?php echo $formNumber ?>','amount');">+</button>
                       			<input id="<?php echo $formNumber ?>" type="text" value="1" name="J1" style="width:10%;"/>                          
                     		<button type="button" class="qtyBtn" onclick="decrease_by_one('<?php echo $formNumber ?>','amount');">-</button>

                    	</div>
                    	<br>
						<!-- Make a form which is linked to AddToCartAction.php, set the variables, and add a button to send them to AddToCart.php -->
                    	<form action="AddToCartAction.php" method="POST">                     
                      		<input id="amount" type="hidden" name="qty" value="<?php echo $formNumber ?>"> 
                      		<input type="hidden" name="ticket_id" value="<?php echo $row["ticket_id"]; ?>">
                      		<input type="hidden" name="tkt_price" value="<?php echo $row["price"]; ?>">
                      		<input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      		<button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    	</form>	
					</div>				
					<?php
					}
				}
			?>
	</body>
	<br></br>
</html>