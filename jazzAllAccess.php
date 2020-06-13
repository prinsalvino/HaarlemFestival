<?php

declare(strict_types=1);
session_start();
include "AutoLoaderIncl.php";


$jazzTicket= new ticketsController();

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
          All Day Access Tickets  || Haarlem Festival
    </title> 
</head>
<body>
<?php include "header.php";
$pattern = '/\borderAdded=yes\b/'; 
$getVar = $_GET['day'];
if (preg_match($pattern, $getVar) == true) { 
    ?><script>
    displayAlert();
    </script>  
<?php
} 

?> 

  <div class="rowTicketpg">
    <div class="columnTicketpg a" style="  margin-top:1vw; text-align: center; width: 30%;">
          <h1 class="inner" >

        <?php
            
          if($_GET['day'] == 27)
            {
              
        ?> 
            <b> Day 2 <br>
            July 27,2020
            <br><br>
            Friday<br>
             
        <?php
            }
            else if($_GET['day'] == 28)
            {
              
        ?> 
        <b> Day 3 <br>
            July 28,2020
            <br><br>
            Saturday<br>
        <?php
        }
        else 
        {
          
        ?> 
             <b> Day 1 <br>
            July 26,2020
            <br><br>
            Thursday<br> 
        <?php
            }
        ?> 
        
            The Patronaat</b>
            <br><br>
            <a href="#venueInfo" class="linkVenueInfo">(venue info)</a>
          </h1>
    </div>


    <div class= "columnTicketpg b" style="margin-top:1vw; width: 60%;">
<!-- -------------------------------------------------------ROW 1---------------------------------------------------------------------------->
      <p style="text-align: center; color: #fff"> <b> Book your <i>"All Day Access"</i> tickets here</b>
    <br><br><br></p>
      <div class="rowTickets">
          <div class="columnTickets" style="width:50%"  >             
            <?php            
                if($_GET['day'] == 27)
                {
                    $jazzTicket->printAllAccessJazzTickets(20, 1); //for jun 27
                }
                else if($_GET['day'] == 28)
                { 
                    $jazzTicket->printAllAccessJazzTickets(21, 1); //for jun 28
                }
                else 
                { 
                    $jazzTicket->printAllAccessJazzTickets(19, 1); //for jun 26
                }
                ?> 
          </div>

          <div class="columnTickets" style="width:50%; margin-top:2vw; display: inline-block;  float: right;  text-align: left;" >
           <?php
            $jazzTicket->printAllAccessJazzTickets(22, 1); //for all 3 days access
           ?>
          </div> 
      </div>
<!-- -------------------------------------------------------ROW 1----------------------------------------------------------------------------> 
  </div>
</div>  
<p><br><br<br><br><br> </p>
<div id=venueInfo class=venueInfo>
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

