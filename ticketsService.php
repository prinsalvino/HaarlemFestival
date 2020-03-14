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
            $date = $this->alterTicketDateFormat($val[2]); //0 
            $time= $val[3]; //1
            $location= $val[4]; //2
            $special= $val[5]; //3 //artist
            $price= $val[6];  //4
            $stock= $val[7]; //5
            
            array_push($eventArray,$date,$time,$location,$special,$price,$stock);
            return $eventArray;
        }
    }

    public function getJazzTicketInfo($t_id) { 
        //function returns jazz tickets full info as an array
        //added _eventHall_eventDay to jazz tickets

        //getting the event hall and event day from table jazz tickets where ticket_id is a foreign key
        $sql = "SELECT event_hall,event_day FROM `Jazz tickets` WHERE ticket_id = ".$t_id.""; 
        $result = $this->connect()->query($sql); 
        $this->closeCon();

        $numRows = $result->num_rows; 
            if ($numRows > 0) 
            {
                while ($row = $result->fetch_array()) 
                { 
                    $data[] = $row; 
                } 
            } 

            $jazzArray= $this->getDanceJazzTickets($t_id) ;
            foreach ($data as $val) {
                // taking the specifically rqd columns from the whole result for the dance/jazz event
                $_eventHall= $val[0];  //6
                $_eventDay= $val[1];  //7
                array_push($jazzArray,$_eventHall,$_eventDay);
            }
            return $jazzArray;
            // return $data; 
            
    }

    public function stockAvalabilityJazz($stock, $AllAccess=null) 
    {
        if($stock>10 && $AllAccess!=null)
        {
        ?>
            <p style="color:green;  "> 
            <b> Available </b></p>
        <?php
        }
        elseif($stock>50 && $AllAccess==null)
        {
        ?>
            <p style="color:green;  "> 
            <b> Available </b></p>
        <?php
        }
        else{
            ?>
            <p style="color:red;  "> 
            <b> Low in Stock </b></p>
        <?php
        }
        
    }

    public function alterTicketDateFormat($date) //split the date into D M Y to display in a new format in the view
    {
        $dateArr = explode("-", $date);
        
        $month=$dateArr[1];

        switch ($month) {
            case "01":
                $month= "Jan";
                break;
            case "02":
                $month= "Feb";
                break;  
            case "03":
                $month= "Mar";
                break;              
            case "04":
                $month= "Apr";
                break;              
            case "05":
                $month= "May";
                break;              
            case "06":
                $month= "Jun";
                break;              
            case "07":
                $month= "Jul";
                break;  
            case "08":
                $month= "Aug";
                break;             
            case "09":
                $month= "Sep";
                break;              
            case "10":
                $month= "Oct";
                break;              
            case "11":
                $month= "Nov";
                break;              
            case "12":
                $month= "Dec";
                break;              
            default:
                $month= "Jul";
        }

        $newDate=$month." ".$dateArr[2].", ".$dateArr[0];
        return $newDate;
    }

    public function Test()
    {
        // session_start();
        // echo session_name();

        $lifetime=5;
        session_start();
        setcookie(session_name(),session_id(),time()+$lifetime);
        echo session_id();
    }

}   

$abc= new ticketsService();
$abc->Test();


 ?>