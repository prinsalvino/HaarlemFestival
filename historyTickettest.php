<?php

declare(strict_types=1);
session_start();

?>  


<html>
    <header></header>
    <body>
        <form>        
            What ID number are we lookin' for chief? <br><input type="text" name="getTicketId"><br>
            <input type="Add ticket (id 1) to shoppingcart" name="action" value="Get item number id 1 from the database (as a test)"><br><br>
		</form>
	</body>
</html>

<?php

require(AutoLoaderIncl.php);
require(DB.php);


//This uses the id you put in. It's just a test, as this ID can be either present to buttons you generate or the ID can be set by buttons you generate.
$getTicketId = $_GET["getTicketId"];

//use the id to find the right one in the database.
//1st, UserService extends DB but we can just access this method via an obj of class UserService instead of DB, better naming stuff, also I ofc belive you'll do all this in a proper method later
//next $result array is already fetched in the method getTicketById($ticketId), so no need to do it again in the while loop, just get the array variable using a foreach loop, i mean i did it that way, you can see that in homepage.php
//hope it wasn;t annoying, just trynna help :)
$dal = NEW DB();
$ticket = $dal->getTicketById($getTicketId);

//For now, since I don't know how to make models, I made this to display the correct one. Plz forgive me.
foreach($ticket as $ticket)
	{
		ECHO "ID: " .$row['ticket_id'].'<br>';
        ECHO "Event: " .$row['event'].'<br>';
        ECHO "Time: " .$row['time'].'<br>';
        ECHO "Location: " .$row['location'].'<br>';
        ECHO "Special: " .$row['special'].'<br>';
        //I'm pulling this stock because what you could do in the actual buttons for the pages is:
            //If($amount > $row['stock']){ (Break here/display error message for not enough stock) };)
        //Which would mean the person is trying to get more stock than there is availible.
        ECHO "Stock: " .$row['stock'].'<br><br>'; 
        ECHO "Price: " .$row['price']. '<br><br>';
	}


?>