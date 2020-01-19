<?php

declare(strict_types=1);
session_start();

?>  
<html class = "danceHomepage">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/dancestylesheet.css">
</head>
<body>
<?php include "header.php";?>

<div class = "danceDescriptionHome">
    <br> </br>Don't miss this exciting chance to eperience 
    a special three-day programme in Haarlem City!
</br> Catch Martin Garrix, Hardwell, Armin van Buuren, Tiesto, Nicky Romero, 
    and Afrojack in Haarlem Dance! Buy your tickets now! </br>
    <br> </br>
    <div class="danceHomeRow">
  <a class="DanceTickets" href="DanceTicket3Days.php">    
  <div class="danceHomeColumn" style=" text-align: center; margin-top:1vw">
    Tickets  
  </div>
  </a>

  <a class="DanceTimetable" href="DanceTimetableFriday.php"> 
  <div class="danceHomeColumn" style=" text-align: center;margin-top:1vw">
    Timetable
  </div>
  </a>

  <a class="DanceInfo" href="DanceTicketSaturday.php">
  <div class="danceHomeColumn" style=" text-align: center; margin-top:1vw">
    Info
  </div>
  </a>
    </div> 
</div>

<?php include "footer.php";?> 

</body>
</html>