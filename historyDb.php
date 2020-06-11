<?php

$connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");

    public function addToCart($user, $ticket_id, $amount, $price)
    {
        $query = "SELECT * FROM tickets WHERE event='History' AND date = '2020-07-26'";
    }


    public function getTicketsSorted($language)
    {   
        $resultTicket = $this->connect()->query("SELECT * FROM tickets WHERE special = '$language';");
        return $resultTicket;
    }

?>