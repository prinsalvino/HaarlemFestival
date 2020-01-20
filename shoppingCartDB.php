<?php

class ShopDB extends DB 
{   
    include "DB.php";
    public function getOrdersTickets() {
        $sql = "SELECT * FROM order_item"; 
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

    public function deleteRecordById($ticket_id,$customer_id) {
        $query = "DELETE FROM order_item WHERE ticket_id='$recordId' && customer_id='$customer_id' ;";
        $result = $this->connect()->query($query); 
        return $result;
    }
}

