<?php

declare(strict_types=1);
session_start();

?>  
<html class = "danceTimetable">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/dancestylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
</head>
<body>
<?php include "header.php";?>


<div class="danceTicketRow">
  <a class="DanceTimetableFriday" href="DanceTimetableFriday.php">    
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    Friday
  </div>
  </a>

  <a class="DanceTimetableSaturday" href="DanceTimetableSaturday.php"> 
  <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
    Saturday
  </div>
  </a>

  <a class="DanceTimetableSunday" href="DanceTimetableSunday.php">
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    Sunday 
  </div>
  </a>
</div> 

<div class="danceBuyTicketRow">
  <a class="DanceTickets" href="DanceTicket3Days.php">    
  <div class="danceBuyTicketColumn" style=" text-align: center; margin-top:1vw">
    Buy your tickets here!
  </div>
  </a>
</div>


<table>
  <tr>
    <td>Artist </td>
    <td>Venue</td>
    <td>Time</td>
    <td>Session</td>
  </tr>
  <tr>
  <td>Nicky Romero/ Afrojack</td>
    <td>Lichtfabriek</td>
    <td>20:00</td>
    <td>Back2Back</td>
  </tr>
  <tr>
  <td>Tiësto</td>
    <td>Club Stalker</td>
    <td>22:00</td>
    <td>Club</td>
  </tr>
  <tr>
  <td>Martin Garrix</td>
    <td>Club Ruis</td>
    <td>22:00</td>
    <td>Club</td>
  </tr>
  <tr>
  <td>Armin van Buuren</td>
    <td>XO The Club</td>
    <td>22:00</td>
    <td>Club</td>
  </tr>
  <tr>
  <td>Hardwell</td>
    <td>JopenKerk</td>
    <td>23:00</td>
    <td>Club</td>
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>