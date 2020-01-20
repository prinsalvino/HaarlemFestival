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
    $ticketID = 0;

    $result = $this->historyDB->getTickets();
    foreach($result as $ticket)
    {
        echo "<p> Hey there </p>";
    }
?>
</body>
<?php
	include ("footer.php");
?>
</html>