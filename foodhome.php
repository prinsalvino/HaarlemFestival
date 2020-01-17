<!doctype html>
<html class = "Food">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
	include ("header.php");
	?>

<body>
</body>
	
<?php
	include ("footer.php");
	?>
</html>

<?php

declare(strict_types=1);
session_start();

require(AutoLoaderIncl.php);
require(DB.php);

//Open a new DB to use for DB connections
$dal = NEW DB();


?>