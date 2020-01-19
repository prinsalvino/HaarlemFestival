<?php include "templates/include/cmsheader.php" 
      include "config.php"  
        ?>

      <ul id="dashboard">
 
<?php
 
$dataPoints = array();

try{
     // Creating a new connection.
    
    $conn = new \PDO( DB_DSN, DB_USERNAME, DB_PASSWORD )
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
	
    $handle = $conn->prepare('select x, y from datapoints'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result as $row){
        array_push($dataPoints, array("x"=> $row->x, "y"=> $row->y));
    }
	$conn = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}	
?>

<!doctype html>
<html>
<body>
    <section class="page_section">
    <section id="Title">
    
        <div>         
            Dashboard
        </div>


        <h1>"Dashboard"</h1>
    </section>  
    
    
    <script>
    window.onload = function () {
 
    var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", 
	title:{
		text: "Sales"
	},
	data: [{
		type: "line", 
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
    });
    chart.render();
 
    }
    

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>







<?php include "templates/include/footer.php" ?>

