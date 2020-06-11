<?php

class HistoryDB{
$connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");


    public function getAll()
    {
      $query = "SELECT * FROM tickets WHERE event='History'";
      $result = mysqli_query($connect, $query);
      return $result;
    }

    public function getAllOnDate($date)
    {
        $query = "SELECT * FROM tickets WHERE event='History' AND date = '$date'";
        $result = mysqli_query($connect, $query);
        return $result;
    }
}

?>