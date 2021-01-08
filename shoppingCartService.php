<?php
//include "showErrors.php";
include_once "ticketsController.php";
session_start();

class shoppingCartService extends ticketsService

{   
    private $ticketsService = NULL; 
    public function getOrderItems($session_id, $user_email) 
    {
        try{
            if($user_email==NULL) //temp user
            {
                //get values from the temp table
                $temp_order_items=$this->sortTicketinfo($session_id, NULL); //array   
                return $temp_order_items;
            }
            else if($session_id==NULL) //loggeed in user
            {
                $order_items=$this->sortTicketinfo(NULL,$user_email); //array    
                return $order_items;   
            }
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }        
    }

    
    public function getAllTempOrder($ses_id) 
    {          
        try{
            $sql = "SELECT * FROM `temp_Order_item` WHERE ExStaus = 'Session Active' && temp_id = '".$ses_id."' "; 
            $result = mysqli_query($this->connect(), $sql);
            $this->closeCon();
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row; 
                }
                return $data;   
            }
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function getAllOrderItems($user_email) //only get orders that are not confirmed by the user
    {          
        try{
            $sql = "SELECT * FROM `order_Items` WHERE `status` = 'Unconfirmed' && `customer_email` = '".$user_email."' "; 
            $result = mysqli_query($this->connect(), $sql);
            $this->closeCon();
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row; 
                }
                return $data;   
            }
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    function sortTicketinfo($ses_id, $user_email)
    {
        $ticketsService = new ticketsController;
        $finalArray=array();

        if($user_email==NULL) //temp user
        {              
            $arr=$this->getAllTempOrder($ses_id) ;                  
        }
        elseif($ses_id==NULL) //logged in user
        {
            $arr=$this->getAllOrderItems($user_email)  ;
        }

        foreach($arr as $data)
        {
            $ticket_id = $data['ticket_id']; 
            $arrs = $ticketsService->getTickets($ticket_id); 

            $eventArray= array();
            foreach ($arrs as $val) 
            {
                $date = $this->alterTicketDateFormat($val[1]); //0
                $time= $val[2]; //1
                $location= $val[3]; //2
                $special= $val[4]; //3 
                $price= $val[5];  //4
               array_push($eventArray,$date,$time,$location,$special,$price);
            }    
            if($ticket_id<23)   //1-22
            {
                $ticket_event="Jazz";
            }
            else if($ticket_id>22 && $ticket_id<40) //23-39
            {
                $ticket_event="Dance";
            }
            else if(($ticket_id>39 && $ticket_id<132) || ($ticket_id>192 && $ticket_id<205)) //40-131 or 193-204
            {
                $ticket_event="Food";
            }
            else if($ticket_id>131 && $ticket_id<190) //132-189
            {
                $ticket_event="History";
            }

            $data2=array(
                'date' => $eventArray[0],
                'time' => $eventArray[1],
                't_name' => $eventArray[3],
                'price' => $eventArray[4],
                'event' => $ticket_event,
            );
            $mergeData = array_merge($data,$data2);
            array_push($finalArray,$mergeData);
        }
        
        return $finalArray;          
    }

    public function deleteRecordById($ticket_id,$customer_email,$session_id) {
        try{
            if($customer_email==NULL) //temp user
            {
                $stmtDel = $this->connect()->prepare  //deleting temp order items
                ("DELETE FROM `temp_Order_item` WHERE `ticket_id` = ? && `temp_id` = ? ;");
                $stmtDel->bind_param("is",$ticket_id,$session_id );
                
            }
            else if($session_id==NULL) //loggeed in user
            {
                $stmtDel = $this->connect()->prepare  //deleting order items
                //("DELETE FROM `order_Items` WHERE `customer_email` = ? && `ticket_id` = ? && `status` = 'Unconfirmed';"); 
                ("UPDATE `order_Items` SET `status` = 'Item Deleted', `ticket_id` = 0 ".
                 " WHERE `customer_email` = ? && `ticket_id` = ? && `status` = 'Unconfirmed';"); 
                $stmtDel->bind_param("si",$customer_email,$ticket_id );
            }
            $stmtDel->execute();               
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }   

    }

    public function confirmOrder($customer_email,$total_price) {
        try{
            $arr = $this->getOrderItems(NULL, $customer_email) ; //get unconfirmed orders

            foreach($arr as $val ){
                $_id = $val['ticket_id'];
                $qty = $val['qty'];

                $stmt3 = $this->connect()->prepare
                ("UPDATE `tickets` SET `stock`= `stock` - ? WHERE `ticket_id` = ?;");
                $stmt3->bind_param("ii", $qty,$_id);
                $stmt3->execute();

            }

            $order_item_ids=array();
            
            foreach($arr as $a)
            {
                array_push($order_item_ids,$a[id]);
            }  

            $order_item_ids = implode(", ",$order_item_ids);

            //to set to default, for test purposes only
            //update order_Items set order_Id=0,status="Unconfirmed" Where NOT status="Item Deleted"
            
            //add order to orders with details of all the order items
            $stmt = $this->connect()->prepare
            ("INSERT INTO `orders`(`customer_email`,`total_price`,`Item_Id`) VALUES (?,?,?) ;");
            $stmt->bind_param("sds", $customer_email,$total_price,$order_item_ids);
            $stmt->execute();

            //mark order as confirmed in order items table and assign order ID to order items who are 0 by default
                $stmt2 = $this->connect()->prepare
            ("UPDATE".
                " order_Items t1".
                " INNER JOIN orders t2 ON t1.customer_email = t2.customer_email".
            " SET".
                " t1.status = 'Confirmed',".
                " t1.order_Id = t2.order_Id".
            " WHERE".
                " t1.status = 'Unconfirmed'".
                " AND t1.customer_email = ? " ) ;
            $stmt2->bind_param("s", $customer_email);
            $stmt2->execute();
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }  
    }

}

// $abc = new shoppingCartService;
// $abc->confirmOrder($_SESSION['email'], $_SESSION['t_price']) ;