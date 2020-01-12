<?php
include "DB.php";

class historyDb extends DB {
    
    //Get all tickets.
    public function getTickets()
    {   
        $resultTicket = $this->connect()->query("SELECT * FROM tickets;");
        return $resultTicket;
    }


    public function getTicketsSorted($language)
    {   
        $resultTicket = $this->connect()->query("SELECT * FROM tickets WHERE special = '$language';");
        return $resultTicket;
    }

?>