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

<tr>
    <td>Artist </td>
    <td>Venue</td>
    <td>Time</td>
    <td>Session</td>
  </tr>

<?php

$ticketController = new ticketsController();

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

printTicketLine($ticketController, 32);
printTicketLine($ticketController, 35);
printTicketLine($ticketController, 33);
printTicketLine($ticketController, 34);

?>
</table>
  
<?php include "footer.php";?> 

</body>
</html>