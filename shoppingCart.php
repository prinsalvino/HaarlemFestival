<!doctype html>
<html>
    <header>
    <?php include "header.php";?>
    <link rel="stylesheet" href="css/stylesheet.css">
    </header>
    <body>
        <table>
            <tr>
                <th>ticket_id</th>
                <th>date</th>
                <th>event</th>
                <th>price</th>
            </tr>
            <?php
                require "shoppingCartDB.php";

                $result = $this->shoppingCartDB->getAllTickets();
                if ($result->num_rows > 0) 
                {
                    while ($row = $result->fetch_assoc()) 
                    { 
                        echo "<tr><td>". $row["ticket_id"] ."</td><td>". $row["date"] ."</td><td>". $row["event"] ."</td><td>". $row["price"] ."</td></tr>"; 
                    } 
                    echo "</table>";   
                }
                else
                {
                    echo "No data found";
                }
                ?>
        </table>
    </body>
</html>
