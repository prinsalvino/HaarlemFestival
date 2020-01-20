<?php
include ("DB.php");

class historyDb extends DB {
    
    public function getTickets() 
    { 
        $sql = "SELECT * FROM tickets WHERE event = 'history'"; 
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


    public function getTicketsSorted($language)
    {   
        $resultTicket = $this->connect()->query("SELECT * FROM tickets WHERE special = '$language';");
        return $resultTicket;
    }

?>