<?php
// include "showErrors.php";
include_once "ticketsController.php";
// include_once "TempOrder_Service.php";

class shoppingCartService extends ticketsService

{   
    private $ticketsService = NULL; 
    public function getOrderItems($session_id, $user_email) 
    {
        try{
            if($user_email==NULL) //temp user
            {
                //get values from the temp table
                $temp_order_items=$this->sortTicketinfo($session_id, NULL); //array    
                return $temp_order_items;
            }
            else if($session_id==NULL) //loggeed in user
            {
                $order_items=$this->sortTicketinfo(NULL,$user_email); //array    
                return $order_items;   
            }
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }        
    }

    
    public function getAllTempOrder($ses_id) 
    {          
        try{
            $sql = "SELECT * FROM `temp_Order_item` WHERE ExStaus = 'Session Active' && temp_id = '".$ses_id."' "; 
            $result = mysqli_query($this->connect(), $sql);
            $this->closeCon();
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row; 
                }
                return $data;   
            }
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function getAllOrderItems($user_email) 
    {          
        try{
            $sql = "SELECT * FROM `order_Items` WHERE `status` = 'Unconfirmed' && `customer_email` = '".$user_email."' "; 
            $result = mysqli_query($this->connect(), $sql);
            $this->closeCon();
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row; 
                }
                return $data;   
            }
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    function sortTicketinfo($ses_id, $user_email)
    {
        $ticketsService = new ticketsController;
        $finalArray=array();

        if($user_email==NULL) //temp user
        {              
            $arr=$this->getAllTempOrder($ses_id) ;                     
        }
        elseif($ses_id==NULL) //loggeed in user
        {
            $arr=$this->getAllOrderItems($user_email)  ;
        }

        foreach($arr as $data)
        {
            $ticket_id = $data['ticket_id']; 
            $arrs = $ticketsService->getTickets($ticket_id);
            $eventArray= array();
            foreach ($arrs as $val) 
            {
                $date = $this->alterTicketDateFormat($val[2]); //0
                $time= $val[3]; //1
                $location= $val[4]; //2
                $special= $val[5]; //3 
                $price= $val[6];  //4
               array_push($eventArray,$date,$time,$location,$special,$price);
            }    
            if($ticket_id<23)   //1-22
            {
                $ticket_event="Jazz";
            }
            else if($ticket_id>22 && $ticket_id<40) //23-39
            {
                $ticket_event="Dance";
            }
            else if(($ticket_id>39 && $ticket_id<132) || ($ticket_id>192 && $ticket_id<205)) //40-131 or 193-204
            {
                $ticket_event="Food";
            }
            else if($ticket_id>131 && $ticket_id<190) //132-189
            {
                $ticket_event="History";
            }

            $data2=array(
                'date' => $eventArray[0],
                'time' => $eventArray[1],
                't_name' => $eventArray[3],
                'price' => $eventArray[4],
                'event' => $ticket_event,
            );
            $mergeData = array_merge($data,$data2);
            array_push($finalArray,$mergeData);
        }          
        return $finalArray;          
    }

    public function deleteRecordById($ticket_id,$customer_id,$session_id) {

       

    }

}

// $abc = new shoppingCartService;
// $abc->ExportTempOrder(1,"test","h04m2mqta4cal2bjl8kjmltlc2");

// $abc = new shoppingCartService;
// $arr=$abc->getOrderItems("9ecrn15ltf36uk5btdopuqa0j1", NULL) ;
// // $arr=$abc->getOrderItems(NULL, "pickyourfilter@bighit.kr") ;
// foreach($arr as $a)
// {
//   print_r($a);   echo "<br>";
// }