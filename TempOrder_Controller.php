<?php
include "TempOrder_Service.php";

class TempOrder_Controller  {
    private $_TempOrder_Service = NULL; 

	public function __construct()	
	{
		$this->_TempOrder_Service = new TempOrder_Service();
    }

    public function DeleteExpiredSessionToken($ses) //delete entries from DB where session token has expired
    {
        $this->_TempOrder_Service->DeleteExpiredSessionToken($ses);
    }

    public function InsertTempOrder($session_id,$ticket_id, $qty, $tkt_price, $Expire_Session) 
    {
        $this->_TempOrder_Service->InsertTempOrder($session_id,$ticket_id, $qty, $tkt_price, $Expire_Session) ;
    }
    public function test()
    {
        echo "work bitch!!!";
    }
    public function ExportTempOrder($ticket_id,$customer_email,$ses_id)
    {
        $this->_TempOrder_Service->ExportTempOrder($ticket_id,$customer_email,$ses_id);
    }
}