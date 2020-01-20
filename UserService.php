<?php
include "DB.php";

class UserService extends DB {
    public function getAllUsers() 
    { 
        $sql = "SELECT * FROM customer"; 
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
    
    //Sorry to put it at the top here, but it's just to test the ticket pull system
    public function getTicketById($id)
    {   
        $resultTicket = $this->connect()->query("SELECT * FROM tickets WHERE ticket_id = '"$id"' ;");
        return $resultTicket;
    }

    public function checkUserExistence($email, $password) //used to check user existence and cross-checks passwords while password reset
    {  
        if($this->verifyUserCredentials($email,$password)==TRUE)
        {            
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getCustomerEmail($email)
    {
        $resultCustomer = $this->connect()->query("SELECT * FROM customer WHERE customer_mail LIKE '".$email."' ;");
        return $resultCustomer;
    }

    public function getVolunteerEmail($email)
    {
        $resultvolunteer = $this->connect()->query("SELECT * FROM volunteer WHERE volunteer_mail LIKE '".$email."' ;");
        return $resultvolunteer;
    }

    public function verifyUserCredentials($email,$password)
        {
            try 
           {  
                $email = mysqli_real_escape_string($this->connect(), $email);
                $numRowsCustomer = $this->getCustomerEmail($email)->num_rows; 
                $numRowsvolunteer = $this->getVolunteerEmail($email)->num_rows; 

                if($numRowsCustomer > 0)
                {  
                    return $this->verifyCustomerPassword($email,$password);
                }

                else if($numRowsvolunteer > 0)
                {  
                    return $this->verifyVolunteerPassword($email,$password);
                }

                else
                {
                    $this->closeCon();
                    return false;
                }
            } 
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }            
        }

        public function verifyCustomerEmailExistance($email)
        {
            try 
            {
                $email = mysqli_real_escape_string($this->connect(), $email);
                $numRowsCustomer = $this->getCustomerEmail($email)->num_rows; 
                $this->closeCon();

                if($numRowsCustomer > 0)
                {  
                    return true;
                }
                else
                {
                    return false;
                }
            }
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            } 
        }

        public function verifyVolunteerEmailExistance($email)
        {
            try 
            {
                $email = mysqli_real_escape_string($this->connect(), $email);
                $numRowsvolunteer = $this->getVolunteerEmail($email)->num_rows; 
                $this->closeCon();
                
                if($numRowsvolunteer > 0)
                {  
                    return true;
                }
                else
                {
                    return false;
                }
            }
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            } 
        }

        public function verifyVolunteerSuperAdmin($email)
        {
            try 
            {
                $email = mysqli_real_escape_string($this->connect(), $email);
                $result = $this->connect()->query("SELECT volunteer_superadmin FROM volunteer WHERE volunteer_mail LIKE '".$email."' ;");
           
                $numRows = $result->num_rows; 
                    if ($numRows > 0) 
                    {
                        $data[]=$result->fetch_array();
                        $a =  $data[0];
                        
                        if($a["volunteer_superadmin"]==1)  
                        {
                            $this->closeCon();
                            return true;
                        }
                        else
                        {
                            $this->closeCon();
                            return false;
                        }
                    }

                $this->closeCon();
            }
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            } 
        }

        public function verifyCustomerPassword($email,$password)
        {
            try 
           {
            $conn=$this->connect();
            $result = $conn->query("SELECT customer_password FROM customer WHERE customer_mail LIKE '".$email."' ;");
            $numRows = $result->num_rows; 
            if ($numRows > 0) 
            {
                $password = mysqli_real_escape_string($conn, $password);
                
                $data[]=$result->fetch_array();
                $a =  $data[0];
            
                if($a["customer_password"]==$password)  
                {
                    $this->closeCon();
                    // echo $a["customer_password"];
                    return true;
                }
                else
                {
                    $this->closeCon();
                    return false;
                }
                
            }
            }
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }

        public function verifyVolunteerPassword($email,$password)
        {
            try{
            $conn=$this->connect();
            $result = $conn->query("SELECT volunteer_password FROM volunteer WHERE volunteer_mail LIKE '".$email."' ;");
           
            $numRows = $result->num_rows; 
                if ($numRows > 0) 
                {
                    $password = mysqli_real_escape_string($conn, $password);
                    
                    $data[]=$result->fetch_array();
                    $a =  $data[0];
                    
                    if($a["volunteer_password"]==$password)  
                    {
                        $this->closeCon();
                        return true;
                    }
                    else
                    {
                        $this->closeCon();
                        return false;
                    }
                }
            }
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }

        public function verifyUserType($email) //to be accessed after login
        {
            try 
           {  
                $numRowsCustomer = $this->getCustomerEmail($email)->num_rows; 
                $numRowsvolunteer = $this->getVolunteerEmail($email)->num_rows; 

                if($numRowsCustomer > 0)
                {  
                    //is customer
                    return True;
                }

                else 
                {  
                     //is volunteer
                    return false;
                }
            } 
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }            
        }

        public function getCustomerInfo($email)  
        {
            //user is customer
            try 
            {
                $email = mysqli_real_escape_string($this->connect(), $email);
                $sql = "SELECT * FROM customer WHERE customer_mail = '".$email."'; " ;          
                $query = mysqli_query($this->connect(),$sql);
                
                while ($row[] = mysqli_fetch_object($query)) 
                {
                    return $row;
                }
            } 
            catch (mysqli_sql_exception $e) 
            {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            } 
        }

        public function getVolunteerInfo($email)  
        {
            //user is volunteer
            try 
            {
                $email = mysqli_real_escape_string($this->connect(), $email);

                $sql = "SELECT * FROM volunteer WHERE volunteer_mail = '".$email."'; " ;          
                $query = mysqli_query($this->connect(),$sql);
                
                while ($row[] = mysqli_fetch_object($query)) 
                {
                    return $row;
                }
            }
                 
            catch (mysqli_sql_exception $e) 
            {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        
        public function addNewCustomer($name, $email, $password)
        {
            try {
                $stmt = $this->connect()->prepare("INSERT INTO `customer`(`customer_name`, `customer_mail`, `customer_password`) VALUES (?,?,?) ;");
                $stmt->bind_param("sss",$name,$email, $password);    
                // set parameters and execute
                // $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                $stmt->execute();
                
            } 
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }

        public function addNewVolunteer($name, $email, $password, $age, $isAdmin, $isSuperadmin )
        {
            try {
                $stmt = $this->connect()->prepare("INSERT INTO `volunteer` (`volunteer_name`,`volunteer_mail`, `volunteer_password`,  `volunteer_age`, `volunteer_admin`, `volunteer_superadmin`) VALUES (?,?,?,?,?,?) ;");
                $stmt->bind_param("sssiii",$name,$email, $password);    
                // set parameters and execute
                // $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                $stmt->execute();
                
            } 
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        
}


?>