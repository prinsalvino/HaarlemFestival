<?php

require_once "FoodService.php";

class FoodController
{
    private $FoodService = NULL; 

	public function __construct()	
	{
		$this->FoodService = new FoodService();
    }
    
    public function getAllRestaurant() 
    { 
        return $this->FoodService->getAllRestaurant(); 
	}

	public function getRestaurantBySpeciality($specialty)
    { 
        return $this->FoodService->getRestaurantBySpeciality($specialty);
	}
	
	public function getSessionTime($restoname){
		return $this->FoodService->getSessionTime($restoname); 
	}
	public function getExtraDescription($restoname){
		return $this->FoodService->getExtraDescription($restoname); 

	}
	public function getPicture($restoname){
		return $this->FoodService->getPicture($restoname); 

	}
	public function getTicketId($date,$restoname, $time){
		$datas = $this->FoodService->getTicketId($date,$restoname, $time);
		foreach ($datas as $data) {
			$ticket_id = $data['ticket_id'];
		}
		return $ticket_id;
	}

	public function getTime($time, $restoname){
		return $this->FoodService->getTime($time, $restoname);
	}

}


?>