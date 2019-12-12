<?php 
class DB 
{
    private $servername,
            $username, 
	        $password,
	        $dbase,
            $_mysqliConnectionObject; 
    
        protected function connect() { 
		$this->servername = "localhost";
		$this->username = "hfitteam1"; 
		$this->password = "3FxmuBcR";
        $this->dbase = "hfitteam1_db";
        
		$this->_mysqliConnectionObject = new mysqli($this->servername, $this->username, $this->password,$this->dbase);
        
        if($this->_mysqliConnectionObject->connect_error)
        {
            die($this->_mysqliConnectionObject->connect_error);
        }
        else{
            // echo "ok tested";
        }

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->_mysqliConnectionObject->set_charset("utf8mb4");

        return $this->_mysqliConnectionObject;
    }
    
    protected function closeCon() {
        $this->_mysqliConnectionObject -> close();
        }
}

?>