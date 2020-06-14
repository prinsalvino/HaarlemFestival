<?php

class HistoryDB{

    public function getAll()
    {
      $connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");
      $query = "SELECT * FROM tickets WHERE event='History'";
      $result = mysqli_query($connect, $query);
      return $result;
    }

    public function getAllOnDate($date)
    {
      $connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");
      $query = "SELECT * FROM tickets WHERE event='History' AND date = '$date'";
      $result = mysqli_query($connect, $query);
      return $result;
    }
}

?>