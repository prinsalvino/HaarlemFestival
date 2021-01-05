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


?>

