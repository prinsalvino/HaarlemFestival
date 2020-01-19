<html>
    <heaer>
    <?php include "header.php";?>
    </header>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Event</th>
                <th>Price</th>
            </tr>
            <?php
                require "shoppingCartDB.php";

                public function getAllTickets()
                {
                    return $this->shoppingCartDB->getAllTickets();
                }

                $result = getAllTickets();
                foreach($result as $ticket)
                {
                    echo "<tr><td>". $row["ticket_id"] ."</td><td>". $row["date"] ."</td><td>".
                     $row["event"] ."</td><td>". $row["price"] ."</td></tr>"; 
                }
                echo "</table>"
                ?>
        </table>
    </body>
</html>
