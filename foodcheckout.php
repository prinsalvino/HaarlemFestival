<!doctype html>
<html class = "FoodCheckout">

<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="foodcheckoutcss.css" rel="stylesheet" type="text/css">
</head>

<?php
	include ("header.php");
?>


<body >
<h1>Reserve Your Table!</h1> </br>

<form class = "NameInput" action="/action_page.php">
Name:   <input type="text" name="Name" value=""><br>
</form>

</br>
<div class = "Calculate">

<p> Adult  {quantity}   € {Price}</p>
<p> Kids(<12)  {quantity}   € {Price}</p>
<br>
<br>

<p class = "TotalPrice"> € {Price}</p>

</div>


<form action="/action_page.php">
Date:		
  <select name="Date">
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
  </select>
  July 2020
</form>
<br/>

<p class = "Time">Time:    18:00</p>
<br/>

<form action="/action_page.php">
Adult: 		
  <select name="Adult">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
	<option value="4">4</option>
  </select>
</form>
<br/>

<form action="/action_page.php">
Kids(<12):				
  <select name="Adult">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
	<option value="4">4</option>
  </select>
</form>
<br/>

<div class = "CalculateReservation">

<p class = "feeexplain">*A reservation fee of €10,- per person. This fee will be deducted <br>
from the final check on visiting the restaurant.</p>

<p>Reservation Fee  € {fee}</p>

</div>

<form class = "TelNumber" action="/action_page.php">
Telephone Number:   	<input type="text" name="telnum" value=""><br>
</form>

</br>
<form  class = "formcomment"action="/action_page.php">
Comments: <input type="text" class = "comments" name="comments" value="">
</form>
	


<input  type="submit" class = "submitbtn" value="Add to Cart">
</body>
<?php
	include ("footer.php");
?>
</html>