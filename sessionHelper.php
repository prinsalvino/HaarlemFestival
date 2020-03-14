<?php
include "DB.php";

class sessionHelper extends DB {
    public function DeleteExpiredSessionToken() //delete entries from DB where session token has expired
    {
        try 
        {
            $conn=$this->connect();  
            $currentDate = date("U");
            // $sql = "DELETE FROM `temp_Order_item`  WHERE  Expire_Session <  ".$currentDate." ;";
            $sql = "UPDATE `temp_Order_item` SET `ExStaus`='Session Expired' WHERE  Expire_Session <  ".$currentDate." ;";            
            $query = mysqli_query($conn,$sql);
        } 
        catch (mysqli_sql_exception $e) 
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    
    }
}