<?php
include "DB.php";

class ticketsService extends DB {
    public function getTickets($t_id) 
    { 
        $sql = "SELECT * FROM `tickets` WHERE ticket_id = ".$t_id.""; 
        $result = $this->connect()->query($sql); 
        $this->closeCon();

        $numRows = $result->num_rows; 
            if ($numRows > 0) 
            {
                while ($row = $result->fetch_array()) 
                { 
                    $data[] = $row; 
                } 
                return $data;
            } 
    }


    public function getDanceJazzTickets($t_id) 
    { 
       $data=$this->getTickets($t_id);
       $eventArray= array();
       foreach ($data as $val) {
        // taking the specifically rqd columns from the whole result for the dance/jazz event
            $date =  $val[2]; //0
            $time= $val[3]; //1
            $location= $val[4]; //2
            $special= $val[5]; //3
            $price= $val[6];  //4
            $stock= $val[7]; //5
            array_push($eventArray,$date,$time,$location,$special,$price,$stock);
            return $eventArray;
        }
    }

}   

// $abc= new ticketsService();
// $arr=$abc->getDanceJazzTickets(23); 
// echo $arr[2];
// print_r($arr);
 ?>