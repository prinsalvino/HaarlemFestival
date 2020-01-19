<!doctype html>
	<html>
	<header>
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="css/historystyle.css">
	</header>
	<?php
	include ("header.php");
	?>
    <body>
		<div>
		<div class="frontImage">
			<img src="img/frontimage.jpg" alt="shopping" width="120%" height="700px" >
			<div class="center-left">Welcome to Haarlem!</div>
			<div class="bottom-left">Join the Historic Tour!</div>
		</div>
		
		<section>
			<ul class="list">
				<li class="header"><a href="historyDetailPage.php">Locations</li>
				<li>1.Church of St. Bavo</li>
				<li>2. Groten Markt</li>
				<li>3. De Hallen</li>
				<li>4. Proveniershof</li>
				<li>5. Jopenkerk (Break location)</li>
				<li>6. Waalse Kerk Haarlem</li>
				<li>7. Molen de Adriaan</li>
				<li>8. Amsterdamse Poort</li>
				<li>9. Hof van Bakenes</li></a>
			</ul> 
			<img src="img/hofjes.jpg" alt="hofjes" class="hofjes">
			
		</section>		
		
		<p class="infoText">Get lost in the rich history of the city on Haarlem with our tour going past and inside many of the city's most well known locations.
			Each tour will take about 3 hours to complete with a break around the middle of the tour, at the Jopenkerk. There will be a total of 4 tour dates, ranging from July 26th to July 29th, of which the latter 3 will have a Chinese, Dutch and English tour. (With the first date simply having English and Dutch.) Individual tickets will cost €17.50 and family tickets, which will be for 4 people, are €60.00 </p>
		
		<button class="button" onclick="location.href='historyTickets.php'">Tickets!</button>
		<button class="button" id="detailButton" onclick="location.href='historyDetailPage.php'">Detail page</button>
		
		<img src="img/poort.jpg" alt="poort" align="middle"; class="poort">
		</div>
	</body>
	<?php
	include ("footer.php");
	?>
</html>
