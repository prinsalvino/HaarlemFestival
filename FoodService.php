<?php
include_once "DB.php";
include "Restaurant.php";

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

class FoodService extends DB {
  
    
	 public function getAllRestaurant() 
    { 
        try 
        {
            $sql = "SELECT ticket_id, location, special, price FROM tickets WHERE event = 'Food' GROUP BY location ;" ; 
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
     public function getRestaurantBySpeciality($specialty) 
     { 
         try 
         {
             $sql = "SELECT ticket_id, location, special, price FROM tickets WHERE event = 'Food' AND special LIKE '%$specialty%' GROUP BY location ;" ; 
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
            $sql = "SELECT id, picture, telephone, email, address FROM restaurant WHERE name = '$restoname'  ;" ; 
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
    public function getPicture($restoname){
		try 
        {
            $sql = "SELECT picture FROM restaurant WHERE name = '$restoname'  ;" ; 
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
    public function getTicketId($date,$restoname, $time){
        try 
        {
            $sql = "SELECT ticket_id FROM tickets WHERE event = 'Food' AND date = '2020-07-$date' AND location = '$restoname' AND time = '$time'" ; 
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