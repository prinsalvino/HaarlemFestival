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
<!-- // this get the ticket  array from the controller  -->

<?php
$ticket = new ticketsController();
$ticketsAllArtistsFri = $ticket->getDanceJazzTickets(36);
$ticketNickyAfrojack = $ticket->getDanceJazzTickets(23);
$ticketTiesto = $ticket->getDanceJazzTickets(24);
$ticketHardwell = $ticket->getDanceJazzTickets(25);
$ticketArmin =$ticket->getDanceJazzTickets(26);
$ticketMartin =$ticket->getDanceJazzTickets(27);
?>

  <tr>
    <td>Friday: All Artists </td>
    <td>€ <?php echo $ticketsAllArtistsFri[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty2');">+</button>
                      <input id="Dqty2" type="text" value="1" name="dance2" />
                      <button onclick="decrease_by_one('Dqty2');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
  <tr>
  <td> <?php echo $ticketNickyAfrojack[3]; ?></td>
    <td>€ <?php echo $ticketNickyAfrojack[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty3');">+</button>
                      <input id="Dqty3" type="text" value="1" name="dance3" />
                      <button onclick="decrease_by_one('Dqty3');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
  <tr>
  <td> <?php echo $ticketTiesto[3]; ?> </td>
    <td>€ <?php echo $ticketTiesto[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty4');">+</button>
                      <input id="Dqty4" type="text" value="1" name="dance4" />
                      <button onclick="decrease_by_one('Dqty4');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
  <tr>
  <td> <?php echo $ticketHardwell[3]; ?> </td>
    <td>€ <?php echo $ticketHardwell[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty5');">+</button>
                      <input id="Dqty5" type="text" value="1" name="dance5" />
                      <button onclick="decrease_by_one('Dqty5');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
  <tr>
  <td><?php echo $ticketArmin[3]; ?> </td>
    <td>€ <?php echo $ticketArmin[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty6');">+</button>
                      <input id="Dqty6" type="text" value="1" name="dance6" />
                      <button onclick="decrease_by_one('Dqty6');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
  <tr>
  <td><?php echo $ticketMartin[3]; ?> </td>
    <td>€ <?php echo $ticketMartin[4]; ?>.00</td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('Dqty7');">+</button>
                      <input id="Dqty7" type="text" value="1" name="dance7" />
                      <button onclick="decrease_by_one('Dqty7');" />-</button>
                    </div></td>
    <td> <button class="addTOcart" onclick="#" > Add to cart </button> </td>
  </tr>
</table>
  
<?php include "footer.php";?> 

</body>
</html>