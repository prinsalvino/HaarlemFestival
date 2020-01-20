<?php

require_once "UserService.php";

class UserController
{
    private $UserService = NULL; 

	public function __construct()	
	{
		$this->UserService = new UserService();
    }

    public function getAllUsers() 
    { 
        return $this->UserService->getAllUsers(); 
    }

	public function showAllUsers() 
	{ 
        $datas = $this->UserService->getAllUsers(); 
		foreach ($datas as $data) 
		{
			echo "ID : ".$data['customer_id']."<br>"; 
			echo "Name : ".$data['customer_name']."<br>"; 
			echo "E Mail : ".$data['customer_mail']."<br>"; 		
		}
	}

	public function checkUserExistence($email, $password) //used while logging in, to check if the user with these credentials exists
	{
		return $this->UserService->checkUserExistence($email, $password) ;
	}

	public function verifyCustomerEmailExistance($email)  //check if Customer's email already exists in the DB
	{
		return $this->UserService->verifyCustomerEmailExistance($email);
	}

	public function verifyVolunteerEmailExistance($email)  //check if volunteer's email already exists in the DB
	{
		return $this->UserService->verifyVolunteerEmailExistance($email);
	}	

	public function verifyUserType($email)  //to determine type of user
	{ 
		return $this->UserService->verifyUserType($email) ;
	}

	public function getCustomerInfo($email)  //to get customer information
	{ 
		return $this->UserService->getCustomerInfo($email) ;
	}

	public function getVolunteerInfo($email)  //to get volunteer information
	{ 
		return $this->UserService->getVolunteerInfo($email) ;
	}

	public function addNewCustomer($name, $email, $password)
	{ 
		return $this->UserService->addNewCustomer($name, $email, $password); 
	}

	public function addNewVolunteer($name, $email, $password, $age, $isAdmin, $isSuperadmin )
	{
		return $this->UserService->addNewVolunteer($name, $email, $password, $age, $isAdmin, $isSuperadmin );
	}

	public function test() 
	{ 
		// return $this->UserService->verifyVolunteerSuperAdmin("616702@student.inholland.nl") ; 
		// return $this->UserService->verifyEmailExistance("617299@student.inholland.nl") ; 
		// return $this->UserService->checkUserExistence("kim.tiana@gmail.com","notSureAboutIt") ; 
		// return $this->UserService->getUserInfo("617299@student.inholland.nl")  ; 

		$UserdataArray = $this->getCustomerInfo("kim.tiana@gmail.com")  ; 
		foreach($UserdataArray as $user)   
            {
				echo "<br><br>Name : ".$user->customer_name." || "; 
				echo "E Mail : ".$user->customer_mail."	"; 
            }
	}
}

// $users = new UserController();
// // print_r($users->test());

// $users->test();

// if($users->test()==TRUE)
// {            
// 	echo "true";
// }
// else
// {
// 	echo "false";
// }
?>