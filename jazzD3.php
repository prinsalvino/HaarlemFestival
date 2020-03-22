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
            Jazz D3 28 July 2020 || Haarlem Festival
    </title> 
</head>
<body>
<?php include "header.php";?> 

  <!-- <div class="cart-quantity">
    Qty: 
                          <br> 
    <button onclick="increase_by_one('qty1','qty8send');">+</button>
    <input id="qty1" type="text" value="1" name="qty" />
    <button onclick="decrease_by_one('qty1','qty8send');">-</button>
  </div> -->

  <div class="rowTicketpg">
    <div class="columnTicketpg a" style="  margin-top:1vw; text-align: center; width: 30%;">
          <h1 class="inner" >
          <b> Day 3<br>
                  July 28,2020
                  <br><br>
                  Saturday<br>
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
                    <?php $jTicketArr13=$jazzTicket->getJazzTicketInfo(13) ;  ?>
                    <?php echo $jTicketArr13[3]; ?>
                    <br>
                    <?php echo $jTicketArr13[1]; ?>
                    <br>
                    <?php echo $jTicketArr13[6]; ?>
                    <br>
                    €<?php echo $jTicketArr13[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          <br> 
                          <button class="qtyBtn" onclick="increase_by_one('qty13','qty13send','qty8send');">+</button>
                            <input id="qty13" type="text" value="1" name="J13" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty13','qty13send');" >-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                    <?php $jazzTicket->stockAvalabilityJazz($jTicketArr13[5]); ?>
                    <br>
                    <form action="AddToCartAction.php" method="POST">                     
                      <input id="qty13send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="13" >
                      <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr13[4]; ?>" >
                      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form> 
              </div>
            </div>
          </div>

          <div class="columnTickets"  >
          <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr16=$jazzTicket->getJazzTicketInfo(16) ;  ?>
                    <?php echo $jTicketArr16[3]; ?>
                    <br>
                    <?php echo $jTicketArr16[1]; ?>
                    <br>
                    <?php echo $jTicketArr16[6]; ?>
                    <br>
                    €<?php echo $jTicketArr16[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          <br> 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty16','qty16send','qty8send');">+</button>
                            <input id="qty16" type="text" value="1" name="J16" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty16','qty16send');" >-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                    <?php $jazzTicket->stockAvalabilityJazz($jTicketArr16[5]); ?>
                    <br>
                    <form action="AddToCartAction.php" method="POST">                     
                      <input id="qty16send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="16" >
                      <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr16[4]; ?>" >
                      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form> 
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
                    <?php $jTicketArr14=$jazzTicket->getJazzTicketInfo(14) ;  ?>
                    <?php echo $jTicketArr14[3]; ?>
                    <br>
                    <?php echo $jTicketArr14[1]; ?>
                    <br>
                    <?php echo $jTicketArr14[6]; ?>
                    <br>
                    €<?php echo $jTicketArr14[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          <br> 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty14','qty14send');">+</button>
                            <input id="qty14" type="text" value="1" name="J14" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty14','qty14send');">-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                    <?php $jazzTicket->stockAvalabilityJazz($jTicketArr14[5]); ?>
                    <br>
                    <form action="AddToCartAction.php" method="POST">                     
                      <input id="qty14send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="14" >
                      <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr14[4]; ?>" >
                      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form>  
              </div>
            </div>
          </div>

          <div class="columnTickets"  >
          <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr17=$jazzTicket->getJazzTicketInfo(17) ;  ?>
                    <?php echo $jTicketArr17[3]; ?>
                    <br>
                    <?php echo $jTicketArr17[1]; ?>
                    <br>
                    <?php echo $jTicketArr17[6]; ?>
                    <br>
                    €<?php echo $jTicketArr17[4]; ?>
                <div class="cart-quantity">
                         Qty: 
                          <br> 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty17','qty17send');">+</button>
                            <input id="qty17" type="text" value="1" name="J17" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty17','qty17send');">-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                    <?php $jazzTicket->stockAvalabilityJazz($jTicketArr17[5]); ?>
                    <br>
                    <form action="AddToCartAction.php" method="POST">                     
                      <input id="qty17send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="17" >
                      <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr17[4]; ?>" >
                      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form>  
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
                    <?php $jTicketArr15=$jazzTicket->getJazzTicketInfo(15) ;  ?>
                    <?php echo $jTicketArr15[3]; ?>
                    <br>
                    <?php echo $jTicketArr15[1]; ?>
                    <br>
                    <?php echo $jTicketArr15[6]; ?>
                    <br>
                    €<?php echo $jTicketArr15[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          <br> 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty15','qty15send');">+</button>
                            <input id="qty15" type="text" value="1" name="J15" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty15','qty15send');">-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                    <?php $jazzTicket->stockAvalabilityJazz($jTicketArr15[5]); ?>
                    <br>
                    <form action="AddToCartAction.php" method="POST">                     
                      <input id="qty15send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="15" >
                      <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr15[4]; ?>" >
                      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form>  
              </div>
            </div>
          </div>

          <div class="columnTickets"  >
          <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr18=$jazzTicket->getJazzTicketInfo(18) ;  ?>
                    <?php echo $jTicketArr18[3]; ?>
                    <br>
                    <?php echo $jTicketArr18[1]; ?>
                    <br>
                    <?php echo $jTicketArr18[6]; ?>
                    <br>
                    €<?php echo $jTicketArr18[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          <br> 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty18','qty18send');">+</button>
                            <input id="qty18" type="text" value="1" name="J18" />                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty18','qty18send');">-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
                    <?php $jazzTicket->stockAvalabilityJazz($jTicketArr18[5]); ?>
                    <br>
                    <form action="AddToCartAction.php" method="POST">                     
                      <input id="qty18send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="18" >
                      <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr18[4]; ?>" >
                      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form>  
              </div>
            </div>
          </div>

         
      </div>
<!-- -------------------------------------------------------ROW 3----------------------------------------------------------------------------> 
  <a class="allAccess" href="jazzAllAccess.php?day=28">
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

