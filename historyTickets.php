<!doctype html>
    <html>
    <header>
    <link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/historystyle.css">
</header>
<?php
include ("header.php");
?>
<body>
<?php
include ("historyDB.php");

    $result = $this->historyDB->getTickets();
    if(empty($result)){ echo "It don't work";
    }
    else if(issit($result)){echo "What?";}
    else{
        foreach($result as $ticket)
    {
        echo "We got it";
    }
}


?>
</body>
</html>