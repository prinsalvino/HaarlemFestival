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
    Dance Festival 27 - 29 April 2020 
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
<!-- // this get the ticket  array from the controller  -->

<?php
$ticket = new ticketsController();
$ticketArr = $ticket->getDanceJazzTickets(39);
?>
  <tr>
    <th>     </th>
    <th>     </th>
    <th>     </th>
  </tr>
  <tr>
    <td>3 Days: All Artists </td>
    <td>€ <?php echo $ticketArr[4]; ?>.00 </td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="increase_by_one('Dqty1','Dqty1send');">+</button>
                      <input id="Dqty1" type="text" value="1" name="dance1"/>
                      <button class = "DQtyBtn" onclick="decrease_by_one('Dqty1','Dqtysend');">-</button>  
                    </div></td>
    <td>            <form action="AddToCartAction.php" method="POST">                     
                      <input id="Dqty1send" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="23" >
                      <input type="hidden" name="tkt_price" value="<?php echo $ticketArr[4]; ?>" >
                      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form>
  </tr>
  <tr>
    <td>      </td>
    <td>      </td>
    <td>      </td>
  </tr>
</table>
  

<?php include "footer.php";?> 

</body>
</html>