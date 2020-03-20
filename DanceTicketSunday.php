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
$ticketsSunAllArtists = $ticket->getDanceJazzTickets(38);
$ticketSun3Artists = $ticket->getDanceJazzTickets(32);
$ticketSunArmin = $ticket->getDanceJazzTickets(33);
$ticketSunHardwell = $ticket->getDanceJazzTickets(34);
$ticketSunMartin =$ticket->getDanceJazzTickets(35);
?>

  <tr>
    <td>Sunday: All Artists </td>
    <td>€ <?php echo $ticketsSunAllArtists[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty13');">+</button>
                      <input id="Dqty13" type="text" value="1" name="dance13" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty13');" />-</button>
                    </div></td>
    <td> <input type="submit" name ="add_to_cart" style = "margin-top:5px" class= "btn-addToCart" value = "Add To Cart" />
  </tr>
  <tr>
  <td> <?php echo $ticketSun3Artists[3]; ?></td>
    <td>€ <?php echo $ticketSun3Artists[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty14');">+</button>
                      <input id="Dqty14" type="text" value="1" name="dance14" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty13');" />-</button>
                    </div></td>
    <td> <input type="submit" name ="add_to_cart" style = "margin-top:5px" class= "btn-addToCart" value = "Add To Cart" />
  </tr>
  <tr>
  <td> <?php echo $ticketSunArmin[3]; ?></td>
    <td>€ <?php echo $ticketSunArmin[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty15');">+</button>
                      <input id="Dqty15" type="text" value="1" name="dance15" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty15');" />-</button>
                    </div></td>
    <td> <input type="submit" name ="add_to_cart" style = "margin-top:5px" class= "btn-addToCart" value = "Add To Cart" />
  </tr>
  <tr>
  <td> <?php echo $ticketSunHardwell[3]; ?></td>
    <td>€ <?php echo $ticketSunHardwell[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty16');">+</button>
                      <input id="Dqty16" type="text" value="1" name="dance16" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty16');" />-</button>
                    </div></td>
    <td> <input type="submit" name ="add_to_cart" style = "margin-top:5px" class= "btn-addToCart" value = "Add To Cart" />
  </tr>
  <tr>
  <td> <?php echo $ticketSunMartin[3]; ?></td>
    <td>€ <?php echo $ticketSunMartin[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty17');">+</button>
                      <input id="Dqty17" type="text" value="1" name="dance17" />
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty17');" />-</button>
                    </div></td>
    <td> <input type="submit" name ="add_to_cart" style = "margin-top:5px" class= "btn-addToCart" value = "Add To Cart" />
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>