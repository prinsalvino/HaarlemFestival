<?php
include_once "DB.php";
//include "showErrors.php";


class OrderService {
    private $DB = NULL; 

	public function __construct()	
	{
		$this->DB = DB::getInstance();
    }	
    
    public function insertOrderItems($customer_email,$ticket_id,$qty,$tkt_price)
    {
        try {
            $total_price = $qty * $tkt_price;            
            
            if($this->updateExistingOrderItem($customer_email,$ticket_id))
            {
                //delete ANY unconfirmed duplicate order with the same email and ticket id
                
                // ("UPDATE `order_Items` SET `qty` = ? , `total_price`=?  WHERE `customer_email` = ? && `ticket_id` = ? && `status` = 'Unconfirmed';"); 
                // $stmt->bind_param("iiis",$qty,$total_price,$customer_email,$ticket_id );
                if($this->DB == NULL){
                    $this->DB = DB::getInstance();
                } 
                $stmt = $this->DB->connect()->prepare  //updating orders
                ("UPDATE `order_items` SET `status` = 'Item Deleted', `ticket_id` = 0 ".
                 " WHERE `customer_email` = ? && `ticket_id` = ? && `status` = 'Unconfirmed';"); 
                $stmt->bind_param("si",$customer_email,$ticket_id );
                $stmt->execute();
            }
                //insert into order_items 
                if($this->DB == NULL){
                    $this->DB = DB::getInstance();
                } 
                $stmt = $this->DB->connect()->prepare
                ("INSERT INTO `order_items`(`customer_email`,`ticket_id`,`qty`,`total_price`) VALUES (?,?,?,?) ;");
                $stmt->bind_param("siii", $customer_email,$ticket_id,$qty,$total_price);
                $stmt->execute();
           
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    function updateExistingOrderItem($customer_email,$ticket_id)
    {
        $sql = "SELECT * FROM `order_items` WHERE `ticket_id` = ".$ticket_id." &&".
               " `customer_email` = '".$customer_email."' && `status` = 'Unconfirmed' ";
        if($this->DB == NULL){
            $this->DB = DB::getInstance();
        } 
        $result = $this->DB->connect()->query($sql); 
        // $this->DB->closeCon();

        $numRows = $result->num_rows; 
        if ($numRows > 0) 
        {
            return TRUE;
        } 
    }
}
