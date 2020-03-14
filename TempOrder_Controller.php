<?php
include "TempOrder_Service.php";

class TempOrder_Controller  {
    private $_TempOrder_Service = NULL; 

	public function __construct()	
	{
		$this->_TempOrder_Service = new TempOrder_Service();
    }

    public function DeleteExpiredSessionToken() //delete entries from DB where session token has expired
    {
        $this->_TempOrder_Service->DeleteExpiredSessionToken();
    }

    public function InsertTempOrder($session_id,$ticket_id, $qty, $tkt_price, $Expire_Session) 
    {
        $this->_TempOrder_Service->InsertTempOrder($session_id,$ticket_id, $qty, $tkt_price, $Expire_Session) ;
    }
}