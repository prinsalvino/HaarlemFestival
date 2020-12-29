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
    Dance Festival 29 April 2020 
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
$ticketsSunAllArtists = $ticket->getDanceJazzTickets(12);
$ticketSun3Artists = $ticket->getDanceJazzTickets(13);
$ticketSunArmin = $ticket->getDanceJazzTickets(14);
$ticketSunHardwell = $ticket->getDanceJazzTickets(15);
$ticketSunMartin =$ticket->getDanceJazzTickets(16);
?>

  <tr>
    <td><?php echo $ticketsSunAllArtists[2]; ?> </td>
    <td>€ <?php echo $ticketsSunAllArtists[3]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty13','Dqty13send');">+</button>
                      <input class = "quantityBox" id="Dqty13" type="text" value="1" name="dance13" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty13','Dqty13send');">-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty13send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="38" >
          <input type="hidden" name="tkt_price" value="<?php echo $ticketsSunAllArtists[4];?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
  <tr>
  <td> <?php echo $ticketSun3Artists[2]; ?></td>
    <td>€ <?php echo $ticketSun3Artists[3]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty14','Dqty14send');">+</button>
                      <input class = "quantityBox" id="Dqty14" type="text" value="1" name="dance14" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty13','Dqty14send');">-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty14send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="32" >
          <input type="hidden" name="tkt_price" value="<?php echo $ticketSun3Artists[4]; ?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
  <tr>
  <td> <?php echo $ticketSunArmin[2]; ?></td>
    <td>€ <?php echo $ticketSunArmin[3]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty15','Dqty15send');">+</button>
                      <input class = "quantityBox" id="Dqty15" type="text" value="1" name="dance15" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty15',,'Dqty15send');">-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty15send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="33" >
          <input type="hidden" name="tkt_price" value="<?php echo $ticketSunArmin[4]; ?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
  <tr>
  <td> <?php echo $ticketSunHardwell[2]; ?></td>
    <td>€ <?php echo $ticketSunHardwell[3]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty16','Dqty16send');">+</button>
                      <input class = "quantityBox" id="Dqty16" type="text" value="1" name="dance16" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty16','Dqty16send');">-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty16send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="34" >
          <input type="hidden" name="tkt_price" value="<?php echo $ticketSunHardwell[4]; ?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
  <tr>
  <td> <?php echo $ticketSunMartin[2]; ?></td>
    <td>€ <?php echo $ticketSunMartin[3]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty17','Dqty17send');">+</button>
                      <input class = "quantityBox" id="Dqty17" type="text" value="1" name="dance17" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty17','Dqty17send');">-</button>
                    </div></td>
    <td> <form action="AddToCartAction.php" method="POST">                     
          <input id="Dqty17send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
          <input type="hidden" name="ticket_id" value="35" >
          <input type="hidden" name="tkt_price" value="<?php echo $ticketSunMartin[4]; ?>" >
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
          <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
        </form>
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>