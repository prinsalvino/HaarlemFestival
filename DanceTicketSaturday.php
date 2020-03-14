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
    <td>Saturday: All Artists </td>
    <td>€ <?php echo $ticketsSatAllArtists[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty8');">+</button>
                      <input id="Dqty8" type="text" value="1" name="dance8" />
                      <button onclick="decrease_by_one('Dqty8');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
  <tr>
  <td> <?php echo $ticketSat3Artists[3]; ?></td>
    <td>€ <?php echo $ticketSat3Artists[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty9');">+</button>
                      <input id="Dqty9" type="text" value="1" name="dance9" />
                      <button onclick="decrease_by_one('Dqty9');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
  <tr>
  <td> <?php echo $ticketSatAfrojack[3]; ?></td>
    <td>€ <?php echo $ticketSatAfrojack[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty10');">+</button>
                      <input id="Dqty10" type="text" value="1" name="dance10" />
                      <button onclick="decrease_by_one('Dqty10');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
  <tr>
  <td> <?php echo $ticketSatTiesto[3]; ?></td>
    <td>€ <?php echo $ticketSatTiesto[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty11');">+</button>
                      <input id="Dqty11" type="text" value="1" name="dance11" />
                      <button onclick="decrease_by_one('Dqty11');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
  <tr>
  <td> <?php echo $ticketSatNicky[3]; ?></td>
    <td>€ <?php echo $ticketSatNicky[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty12');">+</button>
                      <input id="Dqty12" type="text" value="1" name="dance12" />
                      <button onclick="decrease_by_one('Dqty12');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>