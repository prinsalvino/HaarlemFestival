<?php
include "DB.php";

class FoodService extends DB {
    public function getAllRestaurant() 
    { 
        $sql = "SELECT * FROM tickets WHERE event = 'Food'; 
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
        
}


?>