<?php

declare(strict_types=1);
session_start();
include "AutoLoaderIncl.php";

$jazzTicket= new ticketsService();

?>  
<html class="jazzD1">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/jazzstylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
    <title>
            Jazz D2 27 July 2020 || Haarlem Festival
    </title> 
</head>
<body>
<?php include "header.php";?> 

  <div class="rowTicketpg">
    <div class="columnTicketpg a" style="  margin-top:1vw; text-align: center; width: 30%;">
          <h1 class="inner" >
          <b> Day 2 <br>
                  July 27,2020
                  <br><br>
                  Friday<br>
                  The Patronaat</b>
                  <br><br>
                  <a href="#venueInfo2" class="linkVenueInfo">(venue info)</a>
          </h1>
    </div>

    <div class= "columnTicketpg b" style="margin-top:1vw; width: 60%;">
    <!-- -------------------------------------------------------ROW 1---------------------------------------------------------------------------->
    <div class="rowTickets">
            <div class="columnTickets"  >
                <?php $jazzTicket->printJazzTickets(7); ?>
            </div>

            <div class="columnTickets"  >
                <?php $jazzTicket->printJazzTickets(10); ?>
            </div>
            
        </div>
    <!-- -------------------------------------------------------ROW 1----------------------------------------------------------------------------> 
    
    <!-- -------------------------------------------------------ROW 2---------------------------------------------------------------------------->
        <div class="rowTickets">
            <div class="columnTickets"  >
                <?php $jazzTicket->printJazzTickets(8); ?>
            </div>

            <div class="columnTickets"  >
            <?php $jazzTicket->printJazzTickets(11); ?>
            </div>          
        </div>
    <!-- -------------------------------------------------------ROW 2----------------------------------------------------------------------------> 
    
    <!-- -------------------------------------------------------ROW 3---------------------------------------------------------------------------->
        <div class="rowTickets">
            <div class="columnTickets"  >
                <?php $jazzTicket->printJazzTickets(9); ?>
        </div>

            <div class="columnTickets"  >
            <?php $jazzTicket->printJazzTickets(12); ?>
            </div>
        </div>
    <!-- -------------------------------------------------------ROW 3----------------------------------------------------------------------------> 
    <a class="allAccess" href="jazzAllAccess.php?day=27">
    <p >
    Get your All-Access pass for this day @ €35,00 <br>
    All- Access pass for Thursday, Friday, Saturday @ €80,00 </p>
    <a>
  </div> 

 </div>

<div id=venueInfo2 class=venueInfo>
  <h1><i><b> General Information about the venue </b> </i>
    <p>
      <br>
      Patronaat<br>
      Address:<br>
      Zijlsingel 2<br>
      2013 DN Haarlem<br>
      E-mail: info@patronaat.nl<br>
      phone: <br>
      023-517 58 50 (office) -  during office hours 10.00u - 17.00u<br>
      023-517 58 58 (cash desk/information number)</p>
</div> 

 <?php include "footer.php";?> 
</body>
</html>

