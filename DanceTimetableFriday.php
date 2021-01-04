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
    Dance Timetable 27 April 2020 
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

$ticketController = new ticketsController();
$ticketNickyAfrojack = $ticketController->getDanceJazzTickets(23);
$ticketTiesto = $ticketController->getDanceJazzTickets(24);
$ticketHardwell = $ticketController->getDanceJazzTickets(25);
$ticketArmin =$ticketController->getDanceJazzTickets(26);
$ticketMartin =$ticketController->getDanceJazzTickets(27);

function printTicketLine($ticketController, $id)
{
  $ticket = $ticketController->getDanceJazzTickets($id);
  echo <<<EOT
  <tr>
  <td>{$ticket[3]}</td>
    <td>{$ticket[2]}</td>
    <td>{$ticket[1]}</td>
    <td>{$ticket[6]}</td>
  </tr> 
EOT;
}

printTicketLine($ticketController, 23);

?>

  <tr>
    <td>Artist </td>
    <td>Venue</td>
    <td>Time</td>
    <td>Session</td>
  </tr>
  <tr>
  <td><?php echo $ticketNickyAfrojack[3]; ?></td>
    <td><?php echo $ticketNickyAfrojack[2]; ?></td>
    <td><?php echo $ticketNickyAfrojack[1]; ?></td>
    <td><?php echo $ticketNickyAfrojack[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketTiesto[3]; ?></td>
    <td><?php echo $ticketTiesto[2]; ?></td>
    <td><?php echo $ticketTiesto[1]; ?></td>
    <td><?php echo $ticketTiesto[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketMartin[3]; ?></td>
    <td><?php echo $ticketMartin[2]; ?></td>
    <td><?php echo $ticketMartin[1]; ?></td>
    <td><?php echo $ticketMartin[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketArmin[3]; ?></td>
    <td><?php echo $ticketArmin[2]; ?></td>
    <td><?php echo $ticketArmin[1]; ?></td>
    <td><?php echo $ticketArmin[6]; ?></td>
  </tr>
  <tr>
  <td><?php echo $ticketHardwell[3]; ?></td>
    <td><?php echo $ticketHardwell[2]; ?></td>
    <td><?php echo $ticketHardwell[1]; ?></td>
    <td><?php echo $ticketHardwell[6]; ?></td>
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>