<?php
include "DB.php";
include "showErrors.php";


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

    public function getTempOrder($t_id) 
    { 
        $sql = "SELECT * FROM `temp_Order_item` WHERE ticket_id = ".$t_id." && ExStaus = 'Session Active' "; 
        $result = $this->connect()->query($sql); 
        $this->closeCon();

        $numRows = $result->num_rows; 
            if ($numRows > 0) 
            {
                while ($row = $result->fetch_array()) 
                { 
                    $data[] = $row; 
                } 
                //return $data; 
                $orders= array();
                foreach ($data as $val) 
                {
                    // taking the specifically rqd columns from the whole result
                    $ticket_id= $val[1]; //0
                    $qty= $val[2]; //1
                    $total_price= $val[3]; //2
                    array_push($orders,$ticket_id, $qty, $total_price);
                }
                return $orders;
                //return $data;
            } 
           
    }

    public function ExportTempOrder($ticket_id,$customer_email)
    {
         try {
            //get values from the temp table
            $temp_order=$this->getTempOrder($ticket_id); //arrray
           //insert into order_items
            $stmt = $this->connect()->prepare
            ("INSERT INTO `order_Items`(`customer_email`,`ticket_id`,`qty`,`total_price`) VALUES (?,?,?,?) ;");
            $stmt->bind_param("siii", $customer_email, $temp_order[0],$temp_order[1],$temp_order[2] );
            // set parameters and execute
            $stmt->execute();
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}

// $abc = new TempOrder_Service;
// print_r($abc->getTempOrder(101));
// $temp_order=$abc->getTempOrder(101);
// echo $temp_order[0]."--".$temp_order[1]."--".$temp_order[2];