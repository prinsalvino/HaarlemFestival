<?php
include ("DB.php");

class historyDb extends DB {
    
    public function getTickets() 
    { 
        $sql = "SELECT * FROM tickets WHERE event = 'history'"; 
        $result = $this->connect()->query($sql); 
        $this->closeCon();

        $numRows = $result->num_rows; 
            if ($numRows > 0) 
            {
                while ($row = $result->fetch_assoc()) 
                { 
                    $data[] = $row; 
                } 
                return $data;  
                
            } 
    }

    public function addToCart($user, $ticket_id, $amount, $price)
    {
        $link = mysqli_connect("localhost", "hfitteam1", "3FxmuBcR", "hfitteam1_db");

        $sql = "INSERT INTO `order_item` (`customer_id`, `ticket_id`, `qty`, `price`, `payed`) VALUES ('$user', '$ticket_id', '$amount', '$price', '1')";
        if(mysqli_query($link, $sql)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }


    public function getTicketsSorted($language)
    {   
        $resultTicket = $this->connect()->query("SELECT * FROM tickets WHERE special = '$language';");
        return $resultTicket;
    }

?>