<?php
include "DB.php";


class TempOrder_Service extends DB {
    public function DeleteExpiredSessionToken() //delete entries from DB where session token has expired
    {
        try
        {
            $conn=$this->connect();
            $currentDate = date("U");
            // $sql = "DELETE FROM `temp_Order_item`  WHERE  Expire_Session <  ".$currentDate." ;";
            $sql = "UPDATE `temp_Order_item` SET `ExStaus`='Session Expired' WHERE  Expire_Session <  ".$currentDate." ;";
            $query = mysqli_query($conn,$sql);
        }
        catch (mysqli_sql_exception $e)
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

    }

    public function InsertTempOrder($session_id, $ticket_id, $qty, $tkt_price, $Expire_Session)
    {
        try {
            $ExStaus="Session Active";
            $total_price = $qty * $tkt_price;
            $stmt = $this->connect()->prepare
            ("INSERT INTO `temp_Order_item`(`temp_id`, `ticket_id`, `qty`, `total_price`, `Expire_Session`, `ExStaus`) VALUES (?,?,?,?,?,?) ;");
            $stmt->bind_param("siiiis",$session_id,$ticket_id,$qty, $total_price,$Expire_Session,$ExStaus );
            // set parameters and execute
            $stmt->execute();
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function ExportTempOrder()
    {
         try {
           //get values from the temp table
            $stmt = $this->connect()->prepare
            ("INSERT INTO `order_Items`(`customer_email`,`ticket_id`,`qty`,`total_price`) VALUES (?,?,?,?) ;");
            $stmt->bind_param("siii", $customer_email, $ticket_id, $qty, $total_price );
            // set parameters and execute
            $stmt->execute();
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}