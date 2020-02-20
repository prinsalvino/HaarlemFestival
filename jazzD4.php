<?php

declare(strict_types=1);
session_start();
include "AutoLoaderIncl.php";

$jazzTicket= new ticketsService();

?>  
<html class="jazzD4">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/jazzstylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
    <title>
            Jazz D4 29 July 2020 || Haarlem Festival
    </title> 
</head>
<body>
<?php include "header.php";?> 

  <div class="rowTicketpg">
    <div class="columnTicketpg a" style="  margin-top:1vw; text-align: center; width: 30%;">
          <h1 class="inner" >
          <b> Day 4<br>
                  July 29,2020
                  <br><br>
                  Sunday<br>
                  Grote Markt</b>
          </h1>
    </div>


    <div class= "columnTicketpg b" style="margin-top:1vw; width: 60%;">
<!-- -------------------------------------------------------ROW 1---------------------------------------------------------------------------->
      <div class="rowTickets">
          <div class="columnTickets"  >
          <b> 
          <?php $jTicketArr205=$jazzTicket->getJazzTicketInfo(205) ;  ?>
                    <?php echo $jTicketArr205[3]; ?>
                    <br>
                    <?php echo $jTicketArr205[1]; ?>
          </b>
          </div>
          <div class="columnTickets"  >
          <b> 
            <?php $jTicketArr207=$jazzTicket->getJazzTicketInfo(207) ;  ?>
            <?php echo $jTicketArr207[3]; ?>
            <br>
            <?php echo $jTicketArr207[1]; ?>
          </b>
          </div>
      </div>
<!-- -------------------------------------------------------ROW 1----------------------------------------------------------------------------> 
  
<!-- -------------------------------------------------------ROW 2---------------------------------------------------------------------------->
      <div class="rowTickets">
          <div class="columnTickets"  >
          <b> 
            <?php $jTicketArr209=$jazzTicket->getJazzTicketInfo(209) ;  ?>
            <?php echo $jTicketArr209[3]; ?>
            <br>
            <?php echo $jTicketArr209[1]; ?>
          </b>
          </div>
          <div class="columnTickets"  >
          <b> 
            <?php $jTicketArr206=$jazzTicket->getJazzTicketInfo(206) ;  ?>
            <?php echo $jTicketArr206[3]; ?>
            <br>
            <?php echo $jTicketArr206[1]; ?>
          </b>
          </div>
      </div>
<!-- -------------------------------------------------------ROW 2----------------------------------------------------------------------------> 
  
<!-- -------------------------------------------------------ROW 3---------------------------------------------------------------------------->
      <div class="rowTickets">
          <div class="columnTickets"  >
          <b> 
            <?php $jTicketArr208=$jazzTicket->getJazzTicketInfo(208) ;  ?>
            <?php echo $jTicketArr208[3]; ?>
            <br>
            <?php echo $jTicketArr208[1]; ?>
          </b>
          </div>
          <div class="columnTickets"  >
          <b> 
            <?php $jTicketArr210=$jazzTicket->getJazzTicketInfo(210) ;  ?>
            <?php echo $jTicketArr210[3]; ?>
            <br>
            <?php echo $jTicketArr210[1]; ?>
          </b>
          </div>
      </div>
<!-- -------------------------------------------------------ROW 3----------------------------------------------------------------------------> 
  
  </div>
</div>
 <?php include "footer.php";?> 
</body>
</html>

