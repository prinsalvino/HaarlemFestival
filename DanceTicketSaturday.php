<?php

declare(strict_types=1);
session_start();
include "AutoLoaderIncl.php";

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
    Dance Festival 28 April 2020 
</title> 
</head>
<body>
<?php include "header.php";?>


<div class="danceTicketRow">
  <a class="DanceTicket3Days" href="DanceTicket3Days.php">    
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    3 days  
  </div>
  </a>

  <a class="DanceTicketFriday" href="DanceTicketFriday.php"> 
  <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
    Friday
  </div>
  </a>

  <a class="DanceTicketSaturday" href="DanceTicketSaturday.php">
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    Saturday  
  </div>
  </a>

  <a class="DanceTicketSunday" href="DanceTicketSunday.php">
  <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
    Sunday
  </div>
  </a>
</div> 

<table>

<?php
$ticket = new ticketsController();
$ticketsSatAllArtists = $ticket->getDanceJazzTickets(37);
$ticketSat3Artists = $ticket->getDanceJazzTickets(28);
$ticketSatAfrojack = $ticket->getDanceJazzTickets(29);
$ticketSatTiesto = $ticket->getDanceJazzTickets(30);
$ticketSatNicky =$ticket->getDanceJazzTickets(31);
?>
  <tr>
    <td><?php echo $ticketsSatAllArtists[3]; ?></td>
    <td>€ <?php echo $ticketsSatAllArtists[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty8','Dqty8send');">+</button>
                      <input class = "quantityBox" id="Dqty8" type="text" value="1" name="dance8" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty8','Dqty8send');">-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty8send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="37">
          <input type="hidden" name="tkt_price" value="<?php echo $ticketsSatAllArtists[4]; ?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
  <tr>
  <td> <?php echo $ticketSat3Artists[3]; ?></td>
    <td>€ <?php echo $ticketSat3Artists[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty9','Dqty9send');">+</button>
                      <input class = "quantityBox" id="Dqty9" type="text" value="1" name="dance9" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty9','Dqty9send');" />-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty9send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="28" >
          <input type="hidden" name="tkt_price" value="<?php echo $ticketSat3Artists[4]; ?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
  <tr>
  <td> <?php echo $ticketSatAfrojack[3]; ?></td>
    <td>€ <?php echo $ticketSatAfrojack[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty10','Dqty10send');">+</button>
                      <input class = "quantityBox" id="Dqty10" type="text" value="1" name="dance10" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty10','Dqty10send');" />-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty10send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="29" >
          <input type="hidden" name="tkt_price" value="<?php echo $ticketSatAfrojack[4]; ?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
  <tr>
  <td> <?php echo $ticketSatTiesto[3]; ?></td>
    <td>€ <?php echo $ticketSatTiesto[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty11','Dqty11send');">+</button>
                      <input class = "quantityBox" id="Dqty11" type="text" value="1" name="dance11" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty11','Dqty11send');" />-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty11send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="30" >
          <input type="hidden" name="tkt_price" value="<?php echo $ticketSatTiesto[4]; ?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
  <tr>
  <td> <?php echo $ticketSatNicky[3]; ?></td>
    <td>€ <?php echo $ticketSatNicky[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty12','Dqty12send');">+</button>
                      <input class = "quantityBox" id="Dqty12" type="text" value="1" name="dance12" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty12','Dqty12send');" />-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty12send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="31" >
          <input type="hidden" name="tkt_price" value="<?php echo $ticketSatNicky[4]; ?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>