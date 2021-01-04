<?php

declare(strict_types=1);
session_start();
include "AutoLoaderIncl.php";

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
    Dance Timetable 29 April 2020 
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

<?php
$ticket = new ticketsController();
$ticketSun3Artists = $ticket->getDanceJazzTickets(32);
$ticketSunArmin = $ticket->getDanceJazzTickets(33);
$ticketSunHardwell = $ticket->getDanceJazzTickets(34);
$ticketSunMartin =$ticket->getDanceJazzTickets(35);
?>

  <tr>
    <td>Artist </td>
    <td>Venue</td>
    <td>Time</td>
    <td>Session</td>
  </tr>
  <tr>
  <td><?php echo $ticketSun3Artists[3]; ?></td>
    <td><?php echo $ticketSun3Artists[2]; ?></td>
    <td><?php echo $ticketSun3Artists[1]; ?></td>
    <td><?php echo $ticketSun3Artists[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketSunMartin[3]; ?></td>
    <td><?php echo $ticketSunMartin[2]; ?></td>
    <td><?php echo $ticketSunMartin[1]; ?></td>
    <td><?php echo $ticketSunMartin[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketSunArmin[3]; ?></td>
    <td><?php echo $ticketSunArmin[2]; ?></td>
    <td><?php echo $ticketSunArmin[1]; ?></td>
    <td><?php echo $ticketSunArmin[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketSunHardwell[3]; ?></td>
    <td><?php echo $ticketSunHardwell[2]; ?></td>
    <td><?php echo $ticketSunHardwell[1]; ?></td>
    <td><?php echo $ticketSunHardwell[6]; ?></td>
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>