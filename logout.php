<?php

session_start();

session_destroy(); //destroy session
clearstatcache();  //clear chache 
setcookie(session_name(),session_id(),time() - 7200); 

header("Location: index.php?Logout=Successful");//to go back to the index page/login    
?>