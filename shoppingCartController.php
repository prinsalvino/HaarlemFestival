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

}