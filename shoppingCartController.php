<?php
include "shoppingCartService.php";

class shoppingCartController  
{
    private $_shoppingCartService = NULL; 

    public function __construct()	
    {
        $this->_shoppingCartService = new shoppingCartService();
    }

    public function getOrderItems($session_id, $user_email) 
    {
        return $this->_shoppingCartService->getOrderItems($session_id, $user_email);
    }

    public function ExportTempOrder($ticket_id,$customer_email,$ses_id)
    {
        $this->_shoppingCartService->ExportTempOrder($ticket_id,$customer_email,$ses_id);
    }

    public function deleteRecordById($ticket_id,$customer_email,$session_id) 
    {
        $this->_shoppingCartService->deleteRecordById($ticket_id,$customer_email,$session_id);
    }

    public function confirmOrder($customer_email,$total_price) 
    {
        $this->_shoppingCartService->confirmOrder($customer_email,$total_price) ;
    }


}

// $abc = new shoppingCartController  ;
// $abc->confirmOrder($_SESSION['email'], $_SESSION['t_price']) ;
