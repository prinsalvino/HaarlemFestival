<?php
include "DB.php";

class ShopDB extends DB 

{   

    

    public function getOrdersTickets() {

        $sql = "SELECT * FROM order_item"; 

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



    public function deleteRecordById($ticket_id,$customer_id) {

        $query = "DELETE FROM order_item WHERE ticket_id='$recordId' && customer_id='$customer_id' ;";

        $result = $this->connect()->query($query); 

        return $result;

    }

    if (isset($_GET['customer_id'])){

        $customer_id = $_GET['customer_id'];
    
        $ticket_id = $_GET['ticket_id'];
    
        $DB = new ShopDB();
    
        $delete = $common->deleteRecordById($connection,$customer_id, $ticket_id);
    
        if ($delete){
    
            echo '<script>alert("Record deleted successfully !")</script>';
    
            echo '<script>window.location.href="index.php";</script>';
    
        }

}



