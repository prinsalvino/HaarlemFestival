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

<?php
$ticket = new ticketsController();
$ticketSat3Artists = $ticket->getDanceJazzTickets(28);
$ticketSatAfrojack = $ticket->getDanceJazzTickets(29);
$ticketSatTiesto = $ticket->getDanceJazzTickets(30);
$ticketSatNicky =$ticket->getDanceJazzTickets(31);
?>

  <tr>
    <td>Artist </td>
    <td>Venue</td>
    <td>Time</td>
    <td>Session</td>
  </tr>
  <tr>
  <td><?php echo $ticketSat3Artists[3]; ?></td>
    <td><?php echo $ticketSat3Artists[2]; ?></td>
    <td><?php echo $ticketSat3Artists[1]; ?></td>
    <td><?php echo $ticketSat3Artists[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketSatTiesto[3]; ?></td>
    <td><?php echo $ticketSatTiesto[2]; ?></td>
    <td><?php echo $ticketSatTiesto[1]; ?></td>
    <td><?php echo $ticketSatTiesto[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketSatAfrojack[3]; ?></td>
    <td><?php echo $ticketSatAfrojack[2]; ?></td>
    <td><?php echo $ticketSatAfrojack[1]; ?></td>
    <td><?php echo $ticketSatAfrojack[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketSatNicky[3]; ?></td>
    <td><?php echo $ticketSatNicky[2]; ?></td>
    <td><?php echo $ticketSatNicky[1]; ?></td>
    <td><?php echo $ticketSatNicky[6]; ?></td>
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>