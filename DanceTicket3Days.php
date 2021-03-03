<?php

declare(strict_types=1);
session_start();
include "AutoLoaderIncl.php";
include "uiformat.php";

?>  
<html class = "danceTicket">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/dancestylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
<title>
    Dance Festival 27 - 29 April 2020 
</title> 
</head>
<body>
<?php include "header.php";?>

<?php
printTicketMenuBar();
?>

<table>
<!-- // this get the ticket  array from the controller  -->

<?php
$ticketController = new ticketsController();
$ticketArr = $ticketController->getDanceJazzTickets(39);
?>

<tr>
    <th>     </th>
    <th>     </th>
    <th>     </th>
  </tr>

  <?php
  printTicketLine($ticketController,39);
  ?>

  <tr>
    <td>      </td>
    <td>      </td>
    <td>      </td>
  </tr>


</table>

<?php include "footer.php";?> 

</body>
</html>