<?php
include "DB.php";

class ShopDB extends DB 
{
    public function getOrdersTickets() {
        $query = "SELECT * FROM order_item";
        $result = $this->connect()->query($query); 
        return $result;
    }

    public function deleteRecordById($ticket_id,$customer_id) {
        $query = "DELETE FROM order_item WHERE ticket_id='$recordId' && customer_id='$customer_id'";
        $result = $this->connect()->query($query); 
        return $result;
    }
}

