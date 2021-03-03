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
    Dance Festival 27 April 2020 
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

printTicketLines($ticketController,[36,23,24,25,26,27]);

?>
</table>
  
<?php include "footer.php";?> 

</body>
</html>