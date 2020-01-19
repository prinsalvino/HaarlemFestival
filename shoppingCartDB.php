<?php

include "DB.php";

//This is a test to set up a shopping cart.

class shoppingCartDB extends DB {
    public function getAllTickets() 
    { 
        $sql = "SELECT * FROM tickets"; 
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

?>  


