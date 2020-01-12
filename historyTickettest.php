<html>
    <body>
        <form>
        <select name="language">
            <option value="Dutch">Dutch</option>
            <option value="English">English</option>
            <option value="Chinese">Chinese</option>
        </select>
        <br><br>
        <input type="submit">
        </form>
    </body>
</html>



<?php

declare(strict_types=1);
session_start();

require(AutoLoaderIncl.php);
require(DB.php);

//Open a new DB to use for DB connections
$dal = NEW DB();



public method getTickets()
{ 
    if($_GET['language'] == '')
    { 
        //Muskan note:: 1st, UserService extends DB but we can just access this method via an obj of class UserService instead of DB, better naming stuff, also I ofc belive you'll do all this in a proper method later
        $ticket = $dal->getTickets();
    }

    //If a language has been selected, only grab the tickets with that language
    else
    {
        $ticket = $dal->getTicketsSorted($_GET['language']);
    }

    //For now, since I don't know how to make models, I made this to display the correct one. Plz forgive me.
    foreach($ticket as $ticket)
	{
        //I don't know how to do the specifics, but I'ma write my idea down.
        //Make a button for each selected thing and display time, language and price on it.
        //If that button is clicked it'll set a value to that stuff.
        //There'll be a button and text at the bottom, displaying the value of the last pressed button. 
        //If the final bottom button is selected, it'll send the last selected value, tracked on ticket_id to the shopping cart.
    }
}

?>