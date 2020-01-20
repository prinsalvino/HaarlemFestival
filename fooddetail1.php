<!doctype html>
<html class = "fooddetail">
<head>
<meta charset="utf-8">
<link href="fooddetail1css.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php
	include ("header.php");
	?>
	
<body>
<div class = "bg1">
	<div class = "detail">
	<div class = "Title">
	<h1>Restaurant Mr. & Mrs</h1>
	</div>
	<div class = "Subtitle">
	Dutch, Fish & Seafood, European
	</div>
	<div class = "DescriptionTitle">
	<b>Description</b>
	</div>
	<div class = "Description">
	Address: <br>
	Lange Veerstraat 4, 2011 DB Haarlem <br>
	Nederland
	<br>
	<br>
	Telephone: 023 5315935 <br><br>
	Website: <a href="https://www.restaurantmrandmrs.nl/">https://www.restaurantmrandmrs.nl/</a>
	</div>
	</div>
</div>

<div id = "bg2">
	
 <div class = "reservetext">
<br>
<br>
<p class = "reservetable">Reserve a Table <br>
€45/Person</p>
</div>
<br>
<br>

<div class = "booking">
	<p class = "availabletime">Available Time </p> 

	<div class="time1restaurant1" style=" text-align: center;">
    18:00  <br>
   </div>
		<!--<a  href="DanceTicketFriday.php"> -->
  <div class="time1restaurant1" style=" text-align: center;">
    19:30 <br>
  </div>
  <!--</a>-->

  <!--<a class="" href="DanceTicketSaturday.php">-->
  <div class="time1restaurant1" style=" text-align: center;">
    21:00 <br>
  </div>
  <!--</a>-->

</div>

<div>
<img src="/imgrestaurant/mr1.jpg" class = "rest1img" alt="Food1" height="250" width="250">
<img src="/imgrestaurant/mr2.jpg" class = "rest2img" alt="Food2" height="250" width="250">
<img src="/imgrestaurant/mr3.jpg" class = "rest3img" alt="Food3" height="250" width="250">
<img src="/imgrestaurant/mr4.jpg" class = "rest3img" alt="Food4" height="250" width="250">
</div>

<div class = "maps">
	<b class = "location">Location</b><br>
 
<a href="https://www.google.com/maps/place/Restaurant+Mr+%26+Mrs/@52.3804167,4.6357463,17z/data=!3m1!4b1!4m5!3m4!1s0x47c5ef6bda0d8c27:0x81728ce5bf7c3c55!8m2!3d52.3804167!4d4.637935">
 <img src="/imgrestaurant/mrmaps.png" class = "mapsphoto" alt="Maps for restaurant" height="300" width="400">
 </a>

 </div>
</div>
</body>
	
<?php
	include ("footer.php");
	?>
</html>