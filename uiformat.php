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

function printTicketLine($ticketController,$id)
{
  $ticketArr = $ticketController->getDanceJazzTickets($id);

  $idQty = "idQty".$id;
  $idQtySend = "idQtySend".$id;
  $minusBtn = "minusBtn" .$id;
  $plusBtn = "plusBtn" .$id;
  $stock = $ticketArr['stock'];

  if($stock > 0){
    $btnMessage = "Add to Cart";
    $btnDisabled = "";
    $qtyBtnDisabled = "";
  }
  else {
    $btnMessage = "Out of Stock";
    $btnDisabled = "disabled";
    $qtyBtnDisabled = "DQtyBtnDisabled";
  }

  if($stock == 1 ){
    $qtyBtnDisabled = "DQtyBtnDisabled";
  }
  

  echo <<<EOT
  <tr>
    <td>{$ticketArr[3]}</td>
    <td>€ {$ticketArr[4]}.00 </td>
    <td><div class="cart-quantity">
                      Qty: 
                      <button id="{$minusBtn}" {$btnDisabled} class="DQtyBtn DQtyBtnDisabled" onclick="decrease_by_one('{$idQty}','{$minusBtn}','{$plusBtn}');">-</button>
                      <input {$btnDisabled} class = "quantityBox" id="{$idQty}" type="text" value="1" />
                      <button  id="{$plusBtn}" {$btnDisabled} class="DQtyBtn {$qtyBtnDisabled}" onclick="increase_by_one('{$idQty}','{$minusBtn}','{$plusBtn}', {$stock});">+</button>  
                    </div></td>
    <td>            <form action="AddToCartAction.php" method="POST">                     
                      <input id="{$idQtySend}" type="hidden" name="qty" value="1" >  <!--actual field that send qty via post-->
                      <input type="hidden" name="ticket_id" value="{$id}" >
                      <input type="hidden" name="tkt_price" value="{$ticketArr[4]}" >
                      <input type="hidden" name="destination" value="{$_SERVER["REQUEST_URI"]}"/>
                      <button type="submit" {$btnDisabled} class="addTOcart" name="addTOcart" onclick="textFieldAddToCart('{$idQty}','{$idQtySend}');"> {$btnMessage} </button> 
                    </form></td>
  </tr>
  
EOT;

}

function printTicketLines($ticketController, $ids)
{
  foreach ($ids as $id) {
    printTicketLine($ticketController, $id);
  }
}

function printTicketMenuBar(){
  echo <<<EOT
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
EOT;
}

function printTimetableMenuBar(){
  echo <<<EOT
  <div class="danceTicketRow">
  <a class="DanceTimetableFriday" href="DanceTimetableFriday.php">    
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    Friday
  </div>
  </a>

  <a class="DanceTimetableSaturday" href="DanceTimetableSaturday.php"> 
  <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
    Saturday
  </div>
  </a>

  <a class="DanceTimetableSunday" href="DanceTimetableSunday.php">
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    Sunday 
  </div>
  </a>
</div> 

<a href="DanceTicket3Days.php" class="btnBuyTicket">Buy your tickets here!</a>
EOT;
}


?>

