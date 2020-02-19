<?php

require_once "ticketsService.php";

class ticketsController
{
    private $ticketsService = NULL; 

	public function __construct()	
	{
		$this->ticketsService = new ticketsService();
    }

	public function getDanceJazzTickets($t_id){  //get ticket id from view as pram. and returns ticket data
		return $this->ticketsService->getDanceJazzTickets($t_id);
	}

	public function getJazz_eventHall_eventDay($t_id){  
		return $this->ticketsService->getJazz_eventHall_eventDay($t_id);
	}
}

?>