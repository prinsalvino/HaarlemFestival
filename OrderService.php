<?php
include_once "DB.php";
// include_once "showErrors.php";


class OrderService extends DB {
    
    public function insertOrderItems($customer_email,$ticket_id,$qty,$tkt_price)
    {
        try {
            $total_price = $qty * $tkt_price;

            $stmtDel = $this->connect()->prepare  //deleting duplicate orders
            ("DELETE FROM `order_Items` WHERE `ticket_id` = ? && `customer_email` = ? ;");
            $stmtDel->bind_param("is",$ticket_id, $customer_email);
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