<?php

session_start();

session_destroy(); //destroy session
clearstatcache();  //clear chache 

header("Location: indexLogin.php?Logout=Successful");//to go back to the index page/login    
?>