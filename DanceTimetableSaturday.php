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
<title>
    Dance Timetable 28 April 2020 
</title> 
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


<a href="DanceTicket3Days.php" class="btnBuyTicket">Buy your tickets here!</a>

<table>
  <tr>
    <td>Artist </td>
    <td>Venue</td>
    <td>Time</td>
    <td>Session</td>
  </tr>
  <tr>
  <td>Hardwell/ Martin Garrix/ <br><br> Armin van Buuren</td>
    <td>Caprera Openluchttheater</td>
    <td>14:00</td>
    <td>Back2Back</td>
  </tr>
  <tr>
  <td>Tiësto</td>
    <td>Lichtfabriek</td>
    <td>21:00</td>
    <td>TiëstoWorld</td>
  </tr>
  <tr>
  <td>Afrojack</td>
    <td>Jopenkerk</td>
    <td>22:00</td>
    <td>Club</td>
  </tr>
  <tr>
  <td>Nicky Romero</td>
    <td>Club Stalker</td>
    <td>23:00</td>
    <td>Club</td>
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>