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
	public function test() {
		return "tested";
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

}


?>