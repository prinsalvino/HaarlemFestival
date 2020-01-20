<?php
include ("DB.php");

class ShopDB extends DB 
{
    private $servername,
            $username, 
	        $password,
	        $dbase,
            $_mysqliConnectionObject; 
    
        protected function connect() { 
		$this->servername = "localhost";
		$this->username = "hfitteam1"; 
		$this->password = "3FxmuBcR";
        $this->dbase = "hfitteam1_db";
        
		$this->_mysqliConnectionObject = new mysqli($this->servername, $this->username, $this->password,$this->dbase);
        
        if($this->_mysqliConnectionObject->connect_error)
        {
            die($this->_mysqliConnectionObject->connect_error);
        }
        else{
            // echo "ok tested";
        }

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->_mysqliConnectionObject->set_charset("utf8mb4");

        return $this->_mysqliConnectionObject;
    }
    
    protected function closeCon() {
        $this->_mysqliConnectionObject -> close();
        }

    public function getOrdersTickets() {
        $sql = "SELECT * FROM order_item"; 
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

    public function deleteRecordById($ticket_id,$customer_id) {
        $query = "DELETE FROM order_item WHERE ticket_id='$recordId' && customer_id='$customer_id' ;";
        $result = $this->connect()->query($query); 
        return $result;
    }
}

