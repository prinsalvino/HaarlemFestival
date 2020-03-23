<?php
//include "DB.php";
include "showErrors.php";


class OrderService extends DB {
    
    public function insertOrderItems($customer_email,$ticket_id,$qty,$tkt_price)
    {
        try {
            $total_price = $qty * $tkt_price;
            //DELETE ANY duplicate order with the same email and ticket id
            $stmtDel = $this->connect()->prepare  //deleting temporary orders
            ("DELETE FROM `order_Items` WHERE `customer_email` = ? && `ticket_id` = ? && `status` = `Unconfirmed`;"); 
            $stmtDel->bind_param("si",$customer_email,$ticket_id );
            $stmtDel->execute();

           //insert into order_items
            $stmt = $this->connect()->prepare
            ("INSERT INTO `order_Items`(`customer_email`,`ticket_id`,`qty`,`total_price`) VALUES (?,?,?,?) ;");
            $stmt->bind_param("siii", $customer_email,$ticket_id,$qty,$total_price);
            // set parameters and execute
            $stmt->execute();
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function Test()
    {
        echo "order works";
    }
}