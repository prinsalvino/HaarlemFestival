<?php
include "OrderService.php";

class Order_Controller  {
    
    private $_OrderService = NULL; 

	public function __construct()	
	{
		$this->_OrderService = new OrderService();
    }

    public function insertOrderItems($customer_email,$ticket_id,$qty,$total_price)
    {
        $this->_OrderService->insertOrderItems($customer_email,$ticket_id,$qty,$total_price);
    }

    public function Test()
    {
        $this->_OrderService->Test();
    }
}