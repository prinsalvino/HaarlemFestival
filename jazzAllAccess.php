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
              $jTicketArr=$jazzTicket->getJazzTicketInfo(20) ;
        ?> 
            <b> Day 2 <br>
            July 27,2020
            <br><br>
            Friday<br>
             
        <?php
            }
            else if($_GET['day'] == 28)
            {
              $jTicketArr=$jazzTicket->getJazzTicketInfo(21) ;
        ?> 
        <b> Day 3 <br>
            July 28,2020
            <br><br>
            Saturday<br>
        <?php
        }
        else 
        {
          $jTicketArr=$jazzTicket->getJazzTicketInfo(19) ;
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
            <div class="row1">
              <div class="column1" >
                <b> 
                All-Access pass for <?php echo $jTicketArr[0]."\r ".$jTicketArr[7]; ?>:  <br>
                €<?php echo $jTicketArr[4]; ?>
                <div class="cart-quantity">
                      Qty: 
                    <br>
                <?php
                  if($_GET['day'] == 27)
                   {
                ?> 
                  <button class="qtyBtn" onclick="increase_by_one('qty20','qty20send');">+</button>
                  <input id="qty20" type="text" value="1" name="J20" />
                  <button class="qtyBtn" onclick="decrease_by_one('qty20','qty20send');" />-</button>
                <?php
                    }
                    else if($_GET['day'] == 28)
                    {
                ?> 
                  <button class="qtyBtn" onclick="increase_by_one('qty21','qty21send');">+</button>
                  <input id="qty21" type="text" value="1" name="J21" />
                  <button class="qtyBtn" onclick="decrease_by_one('qty21','qty21send');" />-</button>
                <?php
                }
                else 
                {
                ?>

                <button class="qtyBtn" onclick="increase_by_one('qty19','qty19send');">+</button>
                <input id="qty19" type="text" value="1" name="J19" />
                <button class="qtyBtn" onclick="decrease_by_one('qty19','qty19send');" />-</button>
                <?php
                    }
                ?> 

                </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                <?php 
                   $jazzTicket->stockAvalabilityJazz($jTicketArr[5],1);

                  if($_GET['day'] == 27)
                  {
                    ?>
                  <br>
                  <form action="AddToCartAction.php" method="POST">                     
                      <input id="qty20send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="20" >
                      <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr[4]; ?>" >
                      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                  </form>
                  <?php 
                  } 
                  else if($_GET['day'] == 28)
                  {
                    ?>
                  <br>
                  <form action="AddToCartAction.php" method="POST">                     
                      <input id="qty21send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="21" >
                      <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr[4]; ?>" >
                      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                  </form>
                  <?php 
                  }
                  else{
                    ?>
                    <br>
                    <form action="AddToCartAction.php" method="POST">                     
                        <input id="qty19send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                        <input type="hidden" name="ticket_id" value="19" >
                        <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr[4]; ?>" >
                        <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                        <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form>
                    <?php 
                  }
                  
                  ?>
                
              </div>
            </div>
          </div>

          <div class="columnTickets" style="width:50%; margin-top:2vw; display: inline-block;  float: right;  text-align: left;" >
          <div class="row1">
              <div class="column1" >
              <?php $jTicketArr_AA3=$jazzTicket->getJazzTicketInfo(22) ; ?>
                <b> 
                   All-Access pass for Thurs, Fri, Sat<br>
                    €<?php echo $jTicketArr_AA3[4]; ?>  
                    <div class="cart-quantity">
                          Qty: 
                          <br>
                          <button class="qtyBtn" onclick="increase_by_one('qty22','qty22send');">+</button>
                            <input id="qty22" type="text" value="1" name="J22" />
                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty22','qty22send');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1"  style=" float: right; text-align: left; width: auto;">
              <?php $jazzTicket->stockAvalabilityJazz($jTicketArr_AA3[5], 1); ?>
              <br>
                    <form action="AddToCartAction.php" method="POST">                     
                        <input id="qty22send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                        <input type="hidden" name="ticket_id" value="22" >
                        <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr_AA3[4]; ?>" >
                        <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                        <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form> 
              </div>
            </div>
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

