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
    
	public function showAllRestaurant() 
	{ 
        $datas = $this->FoodService->getAllRestaurant(); 
		foreach ($datas as $data)  
		{
			echo "Date : ".$data['date']."<br>"; 
			echo "Time : ".$data['time']."<br>"; 
			echo "Name : ".$data['location']."<br>"; 		
			echo "Special : ".$data['special']."<br>"; 		
			echo "Price : ".$data['price']."<br>"; 		
		}
	}
}


?>