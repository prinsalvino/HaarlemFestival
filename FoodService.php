<?php
include_once "DB.php";
include "Restaurant.php";

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

class FoodService {
    private $DB = NULL; 

	public function __construct()	
	{
		$this->DB = DB::getInstance();
    }	
    function processResult($result){
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
	public function getAllRestaurant() 
    { 
        try 
        {
            $sql = "SELECT ticket_id, location, special, price FROM tickets GROUP BY location ;" ; 
            $result = $this->DB->connect()->query($sql); 
            //$this->DB->closeCon();
            
            return $this->processResult($result); 

        } 
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
       
     }
     public function getRestaurantBySpeciality($specialty) 
     { 
         try 
         {
            $conn = $this->DB->connect();
			$stmt = $conn->prepare("SELECT ticket_id, location, special, price FROM tickets WHERE special LIKE ? GROUP BY location ;");
			$stmt->bind_param('s', $specialty);
			$stmt->execute();
			
			$result = $stmt->get_result();
            //  $sql = "SELECT ticket_id, location, special, price FROM tickets WHERE special LIKE '%$specialty%' GROUP BY location ;" ; 
            //  $result = $this->DB->connect()->query($sql); 
            //$this->DB->closeCon();
     
            return $this->processResult($result); 

         } 
         catch (Exception $e) {
             echo 'Caught exception: ',  $e->getMessage(), "\n";
         }
        
      }
	public function getSessionTime($restoname){
		try 
        {
            $conn = $this->DB->connect();
			$stmt = $conn->prepare("SELECT time FROM tickets WHERE location = ? GROUP BY time ;");
			$stmt->bind_param('s', $restoname);
			$stmt->execute();
            $result = $stmt->get_result();

            // $sql = "SELECT time FROM tickets WHERE location = '$restoname' GROUP BY time ;" ; 
            // $result = $this->DB->connect()->query($sql); 
            //$this->DB->closeCon();
    
            return $this->processResult($result);
        } 
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
		}	
	}
	public function getExtraDescription($restoname){
		try 
        {
            $conn = $this->DB->connect();
			$stmt = $conn->prepare("SELECT id, picture, telephone, email, address FROM restaurant WHERE name = ? ;");
			$stmt->bind_param('s', $restoname);
			$stmt->execute();
            $result = $stmt->get_result();
            // // $sql = "SELECT id, picture, telephone, email, address FROM restaurant WHERE name = '$restoname'  ;" ; 
            // // $result = $this->DB->connect()->query($sql); 
            // $this->DB->closeCon();
            
    
            return $this->processResult($result);

        } 
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
		}	
    }
    public function getPicture($restoname){
		try 
        {
            
            $conn = $this->DB->connect();
			$stmt = $conn->prepare("SELECT picture FROM restaurant WHERE name = ?  ;");
			$stmt->bind_param('s', $restoname);
			$stmt->execute();
            $result = $stmt->get_result();
            // $sql = "SELECT picture FROM restaurant WHERE name = '$restoname'  ;" ; 
            // $result = $this->DB->connect()->query($sql); 
            //$this->DB->closeCon();
            
    
            return $this->processResult($result);

        } 
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
		}	
    }
    public function getTicketId($date,$restoname, $time){
        try 
        {
            $newdate = "2020-07-$date";
            $conn = $this->DB->connect();
			$stmt = $conn->prepare("SELECT ticket_id FROM tickets WHERE date = ? AND location = ? AND time = ?");
			$stmt->bind_param('sss', $newdate, $restoname, $time);
			$stmt->execute();
            $result = $stmt->get_result();
            // $sql = "SELECT ticket_id FROM tickets WHERE date = '2020-07-$date' AND location = '$restoname' AND time = '$time'" ; 
            // $result = $this->DB->connect()->query($sql); 
            //$this->DB->closeCon();
            
    
            return $this->processResult($result);

        } 
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function getTime($time, $restoname){
        try 
        {
            $conn = $this->DB->connect();
			$stmt = $conn->prepare("SELECT date FROM tickets WHERE location = ? AND time = ? AND stock > 0");
			$stmt->bind_param('ss', $restoname, $time);
			$stmt->execute();
            $result = $stmt->get_result();
            // $sql = "SELECT date FROM tickets WHERE location = '$restoname' AND time = '$time' AND stock > 0" ; 
            // $result = $this->DB->connect()->query($sql); 
           // $this->DB->closeCon();
            
    
            return $this->processResult($result);
        } 
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
        
}


?>