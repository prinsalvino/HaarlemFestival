	
<HTML>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="foodhomecss.css" rel="stylesheet" type="text/css">
</head>
	
	
<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "FoodController.php";
include ("header.php");


//Open a new DB to use for DB connections
$restaurant = NEW FoodController();
$restaurants = $restaurant -> getAllRestaurant();

echo "<br>";
foreach($restaurants as $data){
	//$extradesc = $restaurant -> getExtraDescription($data['location']);
	

	$index = 1; ?>
	<div class = "Restaurant<?php echo $index; ?>"> 
	
		<a  href="fooddetail1.php">
    	<img src="/imgrestaurant/rat.png" class = "rest1img" alt="Ratatouile" height="300" width="300">
    	</a>
		
		<h1 class="restaurantname"><?php echo $data['location'];?></h1>
		<br>
	
		<h2><?php echo $data['special']; ?></h2>
		<br>
		
	
		<p class = "price" ><?php echo $data['price'];?></p>
		<br>
	</div>
	
	
<?php	
	$times = $restaurant -> getSessionTime($data['location']);
	?>
	<div class = "BackgroundRestaurant<?php echo $index?>">
	<?php foreach($times as $data){
		$indextime = 1;
		?>
		<div class="time<?php echo $indextime?>restaurant<?php echo $index?>" style=" text-align: center;"> <?php echo $data['time'];  ?>   </div>

		<?php
		$indextime++;
	}

	echo "<br>";
	echo "<br>";
	echo "<br>";
	$index++;
}

	include ("footer.php");


?>
</HTML>