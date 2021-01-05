<?php
function printTimetableLine($ticketController, $id)
{
  $ticket = $ticketController->getDanceJazzTickets($id);
  echo <<<EOT
  <tr>
  <td>{$ticket[3]}</td>
    <td>{$ticket[2]}</td>
    <td>{$ticket[1]}</td>
    <td>{$ticket[6]}</td>
  </tr> 
EOT;
}

function printTimetableLines($ticketController, $ids) {
   echo <<<EOT
   <tr>
    <td>Artist </td>
    <td>Venue</td>
    <td>Time</td>
    <td>Session</td>
  </tr>
EOT;
    foreach ($ids as $id) {
        printTimetableLine($ticketController, $id);
    }
}

function printTicketLine($ticketController,$id,$Dqty,$DqtySend,$danceName)
{
  $ticketArr = $ticketController->getDanceJazzTickets($id);
  echo <<<EOT
  <tr>
    <td>{$ticketArr[3]}</td>
    <td>€ {$ticketArr[4]}.00 </td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button class = "DQtyBtn" onclick="decrease_by_one('{$Dqty}','{$DqtySend}');">-</button>
                      <input class = "quantityBox" id="{$Dqty}" type="text" value="1" name="{$danceName}"/>
                      <button class = "DQtyBtn" onclick="increase_by_one('{$Dqty}','{$DqtySend}');">+</button>  
                    </div></td>
    <td>            <form action="AddToCartAction.php" method="POST">                     
                      <input id="{$DqtySend}" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="{$id}" >
                      <input type="hidden" name="tkt_price" value="{$ticketArr[4]}" >
                      <input type="hidden" name="destination" value="{$_SERVER["REQUEST_URI"]}"/>
                      <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button> 
                    </form></td>
  </tr>
EOT;
}


?>

