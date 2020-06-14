<?php

require_once "ticketsService.php";

class ticketsController
{
    private $ticketsService = NULL; 

	public function __construct()	
	{
		$this->ticketsService = new ticketsService();
    }

	public function getTickets($t_id){  //get ticket id from view as pram. and returns ticket data
		return $this->ticketsService->getTickets($t_id);
	}
	
	public function getDanceJazzTickets($t_id){  
		return $this->ticketsService->getDanceJazzTickets($t_id);
	}

	public function getJazzTicketInfo($t_id){  
		return $this->ticketsService->getJazzTicketInfo($t_id);
	}

	public function deductQtyFromStock($ticket_id, $qty)
    { 
		return $this->ticketsService->deductQtyFromStock($ticket_id, $qty);
    }

    public function stockAvalabilityJazz($stock) {
        return $this->ticketsService->stockAvalabilityJazz($stock);
    }

    public function stockAvalabilityJazzAllAccess($stock, $AllAccess) {
        return $this->ticketsService->stockAvalabilityJazz($stock,  $AllAccess);
    }
    
    public function printJazzTickets($ticket_id)
    {
        return $this->ticketsService->printJazzTickets($ticket_id);
    }

    public function printAllAccessJazzTickets($ticket_id)
    {
        return $this->ticketsService->printAllAccessJazzTickets($ticket_id);
    }

    
}

?>