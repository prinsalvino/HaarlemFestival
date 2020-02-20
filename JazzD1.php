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
            Jazz D1 26 July 2020 || Haarlem Festival
    </title> 
</head>
<body>
<?php include "header.php";?> 

  <!-- <div class="cart-quantity">
    Qty: 
    <button onclick="increase_by_one('qty1');">+</button>
    <input id="qty1" type="text" value="1" name="qty" />
    <button onclick="decrease_by_one('qty1');" />-</button>
  </div> -->

  <div class="rowTicketpg">
    <div class="columnTicketpg a" style="  margin-top:1vw; text-align: center; width: 30%;">
          <h1 class="inner" >
          <b> Day 1 <br>
                  July 26,2020
                  <br><br>
                  Thursday<br>
                  The Patronaat</b>
                  <br><br>
                  <a href="#venueInfo1" class="linkVenueInfo">(venue info)</a>
          </h1>
    </div>


    <div class= "columnTicketpg b" style="margin-top:1vw; width: 60%;">
<!-- -------------------------------------------------------ROW 1---------------------------------------------------------------------------->
      <div class="rowTickets">
          <div class="columnTickets"  >
            <div class="row1">
              <div class="column1" >
                <b>                 
                  <?php $jTicketArr1=$jazzTicket->getJazzTicketInfo(1) ;  ?>
                  <?php echo $jTicketArr1[3]; ?>
                    <br>
                    <?php echo $jTicketArr1[1]; ?>
                    <br>
                    <?php echo $jTicketArr1[6]; ?>
                    <br>
                    €<?php echo $jTicketArr1[4]; ?>  
                    <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty1');">+</button>
                            <input id="qty1" type="text" value="1" name="J1" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty1');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
              <!-- <p style="color:green;  "> 
                <b> Available </b></p> -->
                <?php $jazzTicket->stockAvalabilityJazz($jTicketArr1[5]); ?>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          <div class="columnTickets"  >
          <div class="row1">
              <div class="column1" >
                <b> 
                    <?php $jTicketArr4=$jazzTicket->getJazzTicketInfo(4) ;  ?>
                    <?php echo $jTicketArr4[3]; ?>
                    <br>
                    <?php echo $jTicketArr4[1]; ?>
                    <br>
                    <?php echo $jTicketArr4[6]; ?>
                    <br>
                    €<?php echo $jTicketArr4[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty4');">+</button>
                            <input id="qty4" type="text" value="1" name="J4" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty4');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
              <!-- <p style="color:green;  "> 
                <b> Available </b></p> -->
                <?php $jazzTicket->stockAvalabilityJazz($jTicketArr4[5]); ?>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          
      </div>
<!-- -------------------------------------------------------ROW 1----------------------------------------------------------------------------> 
   
<!-- -------------------------------------------------------ROW 2---------------------------------------------------------------------------->
      <div class="rowTickets">
          <div class="columnTickets"  >
            <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr2=$jazzTicket->getJazzTicketInfo(2) ;  ?>
                    <?php echo $jTicketArr2[3]; ?>
                    <br>
                    <?php echo $jTicketArr2[1]; ?>
                    <br>
                    <?php echo $jTicketArr2[6]; ?>
                    <br>
                    €<?php echo $jTicketArr2[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty2');">+</button>
                            <input id="qty2" type="text" value="1" name="J2" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty2');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                <?php $jazzTicket->stockAvalabilityJazz($jTicketArr2[5]); ?>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          <div class="columnTickets"  >
          <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr5=$jazzTicket->getJazzTicketInfo(5) ;  ?>
                    <?php echo $jTicketArr5[3]; ?>
                    <br>
                    <?php echo $jTicketArr5[1]; ?>
                    <br>
                    <?php echo $jTicketArr5[6]; ?>
                    <br>
                    €<?php echo $jTicketArr5[4]; ?>
                <div class="cart-quantity">
                         Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty5');">+</button>
                            <input id="qty5" type="text" value="1" name="J5" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty5');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                <?php $jazzTicket->stockAvalabilityJazz($jTicketArr5[5]); ?>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          
      </div>
<!-- -------------------------------------------------------ROW 2----------------------------------------------------------------------------> 
   
<!-- -------------------------------------------------------ROW 3---------------------------------------------------------------------------->
      <div class="rowTickets">
          <div class="columnTickets"  >
            <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr3=$jazzTicket->getJazzTicketInfo(3) ;  ?>
                    <?php echo $jTicketArr3[3]; ?>
                    <br>
                    <?php echo $jTicketArr3[1]; ?>
                    <br>
                    <?php echo $jTicketArr3[6]; ?>
                    <br>
                    €<?php echo $jTicketArr3[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty3');">+</button>
                            <input id="qty3" type="text" value="1" name="J3" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty3');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                <?php $jazzTicket->stockAvalabilityJazz($jTicketArr3[5]); ?>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          <div class="columnTickets"  >
          <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr6=$jazzTicket->getJazzTicketInfo(6) ;  ?>
                    <?php echo $jTicketArr6[3]; ?>
                    <br>
                    <?php echo $jTicketArr6[1]; ?>
                    <br>
                    <?php echo $jTicketArr6[6]; ?>
                    <br>
                    €<?php echo $jTicketArr6[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty6');">+</button>
                            <input id="qty6" type="text" value="1" name="J6" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty6');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                <?php $jazzTicket->stockAvalabilityJazz($jTicketArr6[5]); ?>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

         
      </div>
<!-- -------------------------------------------------------ROW 3----------------------------------------------------------------------------> 
  <a class="allAccess" href="jazzAllAccess.php?day=26">
    <p >
    Get your All-Access pass for this day @ €35,00 <br>
    All- Access pass for Thursday, Friday, Saturday @ €80,00 </p>
    <a>
  </div> 

 </div>

<div id=venueInfo1 class=venueInfo>
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

