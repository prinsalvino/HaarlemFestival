<?php include "header.php" ?>
<?php include "DB.php" ?>
<?php session_start(); ?>
<!doctype html>
<html class = "dashboard">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/styleCMS.css">
</head>

<body>
    <section class="page_section">
        <section id="Title">
    
        <div style="width: 1388px;">              
                Editable Pages
            </div>           
        </section>      

      <h1>Select Event To Edit</h1>

      <div class="sidenav">
        <a href="dashboard.php">Dashboard</a>
        <button class="dropdown-btn" style="width: 170px;">Products</button>
        <div class="dropdown-container">
            <a href="addEvents.php" style="background-color: slategrey;">Add New</a>
            <a href="listEvents.php" style="background-color: slategrey;">Edit Existing</a>    
        </div>
        <a href="homepageLogin.php">Logout</a>     
    </div>

    <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "contents") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "contents";
    }
    });
    }
    </script>     
 </section>
    


</body>
</html>

<html>
<body>
<?php 
$connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");
$query = "SELECT * FROM tickets";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> ID </td> 
          <td> Event</td> 
          <td> Date </td> 
          <td> Time </td> 
          <td> Location </td> 
          <td> Special </td> 
      </tr>';
 
if ($result = $connect->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ticket_id"];
        $field2name = $row["event"];
        $field3name = $row["date"];
        $field4name = $row["time"];
        $field5name = $row["location"]; 
        $field6name = $row["special"]; 
 
        echo '<a href= "editEvent.php?id=$field1name"><tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
              </tr> </a>';
    }
    $result->free();
} 


$results_per_page = 20;

$sql = 'SELECT * FROM tickets';
$result = mysqli_query($connect,$sql);
$number_of_results = mysqli_num_rows($result);



$number_of_pages = ceil($number_of_results/$results_per_page);

if (!isset($_GET['page'])) {
  $page = 1;
  else{
    $page = $_GET['page'];
  }
}

$this_page_first_result = ($page-1)*$results_per_page;

$sql = 'SELECT * FROM tickets LIMIT ' . $this_page_first_result . ',' . $results_per_page;
$result = mysqli_query($connect,$sql);

while ($row = mysqli_fetch_array($result))
{
  echo $row['id'] . ' ' . $row['tickets'] . '<br>';
}

for ($page=1;$page<=$number_of_pages;$page++) {
echo '<a href="listEvents.php?page=' . $page .'">' . $page . '</a> ';
}

?>



</body>
</html>

   

<?php include "footer.php" ?>