<?php
include "DB.php";
//include "showErrors.php";

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
        if($stock>10 && $AllAccess!=null) //green
        {
        ?>
            <p style="color:#228B22;  "> 
            <b> Available </b></p>
        <?php
        }
        elseif($stock>50 && $AllAccess==null) //green
        {
        ?>
            <p style="color:#228B22;  "> 
            <b> Available </b></p>
        <?php
        }

        elseif($stock==0) //red
        {
        ?>
            <p style="color:#DC143C ;  "> 
            <b> Out of Stock </b></p>
        <?php
        }

        else{ //yellow
            ?>
            <p style="color: #9B870C;  "> 
            <b> Low in Stock </b></p>
        <?php
        }
        
    }

    public function alterTicketDateFormat($date) //split the date into D M Y to display in a new format in the view
    {
        $dateArr = explode("-", $date);
        
        $month=$dateArr[1];

        switch ($month) {
               
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
            default:
                $month= "Jul";
        }

        $newDate=$month." ".$dateArr[2].", ".$dateArr[0];
        return $newDate;
    }

    public function deductQtyFromStock($ticket_id, $qty)
    {        
        $stmt = $this->connect()->prepare  
        ("UPDATE `tickets` SET `stock`= stock-? WHERE `ticket_id` = ? ") ; 
        $stmt->bind_param("ii", $qty,$ticket_id );
        $stmt->execute();
    }


    //functions to display Jazz tickets

    public function gatherJazzTicketInfo($ticket_id, $jTicketArr)
    {
        ?>
        <div class="column1" >
            <b>                 
            <?php $jTicketArr=$this->getJazzTicketInfo($ticket_id) ;  ?>
            <?php echo $jTicketArr[3]; //Artists ?>  
                <br>
                <?php echo $jTicketArr[1]; //time  ?> 
                <br>
                <?php echo $jTicketArr[6]; //event hall  ?> 
                <br>
                €<?php echo $jTicketArr[4];   //price  ?>

                <div class="cart-quantity">
                 
                <?php
                    if($jTicketArr[5]!=0)
                    {
                        ?>
                        Qty:
                        <br> 
                            <button class="qtyBtn" onclick="increase_by_one('qty<?php echo $ticket_id  ?>','qtySend<?php echo $ticket_id  ?>');">+</button>
                                <input id="qty<?php echo $ticket_id  ?>" type="text" value="1" name="qty" 
                                style=" width: 50%; background-color: #ccc;" />                                            
                            <button class="qtyBtn" onclick="decrease_by_one('qty<?php echo $ticket_id  ?>','qtySend<?php echo $ticket_id  ?>');" />-</button>
                
                        <?php
                    }
                ?>
                
                </div>
            </b>
        </div>
        <?php
            return $jTicketArr;
    }
    

    public function printJazzTickets($ticket_id)
    {
        ?>
            
            <div class="row1">
                <?php
                $jTicketArr = null;
                $jTicketArr =$this->gatherJazzTicketInfo($ticket_id, $jTicketArr);
                ?>
                <div class="column1" style=" float: right; text-align: left; width: auto;" >
                    <?php $this->stockAvalabilityJazz($jTicketArr[5]); ?>
                        <br>
                        <form action="AddToCartAction.php" method="POST">                     
                        <input id="qtySend<?php echo $ticket_id ; ?>" type="hidden" name="qty" value="1" >  
                        <!--actual field that send qty via post-->
                        <input type="hidden" name="ticket_id" value="<?php echo $ticket_id;  ?>" >
                        <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr[4]; ?>" >
                        <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                        <?php
                        if($jTicketArr[5]!=0)
                        {
                            ?>
                            <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button>
                            <?php
                        }
                        ?>                           
                        </form>
                </div>
            </div>

        <?php
    }

    public function gatherAllAccessJazzTicketInfo($ticket_id, $jTicketArr)
    {
        ?>
        <div class="column1" >
            <b>                 
                <?php $jTicketArr=$this->getJazzTicketInfo($ticket_id) ;  

                if($ticket_id == 22)
                {
                    echo $jTicketArr[3]; //name
                }
                else{
                    echo $jTicketArr[3]." for<br> ".$jTicketArr[0].", ".$jTicketArr[7]; //name
                }
                ?>  
                
                <br>
                €<?php echo $jTicketArr[4];   //price  ?>

                <div class="cart-quantity">
                <?php
                    if($jTicketArr[5]!=0)
                    {
                        ?>
                        Qty:
                        <br> 
                            <button class="qtyBtn" onclick="increase_by_one('qty<?php echo $ticket_id  ?>','qtySend<?php echo $ticket_id  ?>');">+</button>
                                <input id="qty<?php echo $ticket_id  ?>" type="text" value="1" name="qty" 
                                style=" width: 50%; background-color: #ccc;" />                                            
                            <button class="qtyBtn" onclick="decrease_by_one('qty<?php echo $ticket_id  ?>','qtySend<?php echo $ticket_id  ?>');" />-</button>
                
                        <?php
                    }
                ?>
                </div>
            </b>
        </div>
        <?php
            return $jTicketArr;
    }

    public function printAllAccessJazzTickets($ticket_id)
    {
        ?>
            
            <div class="row1">
                <?php
                $jTicketArr = null;
                $jTicketArr =$this->gatherAllAccessJazzTicketInfo($ticket_id, $jTicketArr);
                ?>
                <div class="column1" style=" float: right; text-align: left; width: auto;" >
                    <?php $this->stockAvalabilityJazz($jTicketArr[5], 1); ?>
                        <br>
                        <form action="AddToCartAction.php" method="POST">                     
                            <input id="qtySend<?php echo $ticket_id;  ?>" type="hidden" name="qty" value="1" >  
                            <!--actual field that send qty via post-->
                            <input type="hidden" name="ticket_id" value="<?php echo $ticket_id;  ?>" >
                            <input type="hidden" name="tkt_price" value="<?php echo $jTicketArr[4]; ?>" >
                            <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                            <?php
                            if($jTicketArr[5]!=0)
                            {
                                ?>
                                <button type="submit" class="addTOcart" name="addTOcart"> Add to cart </button>
                                <?php
                            }
                            ?>   
                        </form>
                </div>
            </div>

        <?php
    }

}   




 ?>