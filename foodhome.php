	
<HTML class = "foodHome">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/foodhome.css">
<link rel="stylesheet" type="text/css" href="css/cssbootstrap/bootstrap.css">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
	
	
<?php

session_start();
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

include "FoodController.php";
include ("header.php");


//Open a new DB to use for DB connections
$restaurant = NEW FoodController();
$restaurants = $restaurant -> getAllRestaurant();

echo "<br>";
foreach($restaurants as $data){
	$restoname = $data['location'];
	$specialty = $data['special'];
	$extradesc = $restaurant -> getExtraDescription($restoname);
	$pictures = $restaurant -> getPicture($restoname);
	$times = $restaurant -> getSessionTime($restoname);
	$price = $data['price'];
	$restoid = $data['ticket_id'];
	
	
	foreach ($pictures as $data) {
		$picture = $data['picture'];
	}

	
	 ?>
	<div class = "container">
	<div class = "row">
		<div class = "column1"> 
	
			<a  href="fooddetail1.php">
    		<img src="/imgrestaurant/<?php echo $picture?>" class = "restimg" alt="<?php echo $picture?>" height="300" width="300">
    		</a>
		
			<h1 class="restaurantname"><?php echo $restoname;?></h1>
		
	
			<h2 class="description"><?php echo $specialty; ?></h2>
			
			<p class = "extradesc">
			<?php
			foreach($extradesc as $data){
				echo "Telephone: "; echo $data['telephone']; echo "<br>"; echo "<br>";
				echo "Email: "; echo $data['email']; echo "<br>"; echo "<br>";
				echo "Address: "; echo $data['address']; echo "<br>"; 
			}
			?>
			</p>

		
			<p class = "price">€ <?php echo $price;?></p>
			<br>
		</div>
	
		<div class = "column2">
			<?php 
			
			foreach($times as $data){
				$url="timeToSes.php?time=".$data['time'];			
			?>
				
				<button onClick = "window.location.href = '<?php echo $url; ?>';" id = "time" type = "submit" href= "#" class="time" role = "button" style=" text-align: center;"> <?php echo $data['time'];  ?>   </button>
			<?php
	}
	?>
		</div>
	</div>
	</div>

	<?php

	echo "<br>";
	echo "<br>";
	echo "<br>";
}
	include ("footer.php");
?>
<script>
	function getTime(session, time) {
		//$_SESSION["time"] = time;
		session = time;
		alert(session);
	
	}
</script>
</HTML>