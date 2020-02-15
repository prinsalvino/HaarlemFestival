<?php
include "DB.php";
include "Restaurant.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class FoodService extends DB {
  
    
	 public function getAllRestaurant() 
    { 
        try 
        {
            $sql = "SELECT location, special, price FROM tickets WHERE event = 'Food' GROUP BY location ;" ; 
            $result = $this->connect()->query($sql); 
            $this->closeCon();
            
    
            $numRows = $result->num_rows; 
                if ($numRows > 0) 
                {
                    while ($row = $result->fetch_assoc()) 
                    { 
                         $data[] = $row;
                    } 
                    return $data;     
                } 
        } 
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
       
	 }
	public function getSessionTime($restoname){
		try 
        {
            $sql = "SELECT time FROM tickets WHERE event = 'Food' AND location = '$restoname' GROUP BY time ;" ; 
            $result = $this->connect()->query($sql); 
            $this->closeCon();
            
    
            $numRows = $result->num_rows; 
                if ($numRows > 0) 
                {
                    while ($row = $result->fetch_assoc()) 
                    { 
                         $data[] = $row;
                    } 
                    return $data;     
                } 
        } 
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
		}	
	}
	public function getExtraDescription($restoname){
		try 
        {
            $sql = "SELECT picture, telephone, email, address FROM restaurant WHERE name = '$restoname'  ;" ; 
            $result = $this->connect()->query($sql); 
            $this->closeCon();
            
    
            $numRows = $result->num_rows; 
                if ($numRows > 0) 
                {
                    while ($row = $result->fetch_assoc()) 
                    { 
                         $data[] = $row;
                    } 
                    return $data;     
                } 
        } 
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
		}	
	}
        
}


?>