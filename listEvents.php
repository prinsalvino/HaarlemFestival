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
            <a href="editEvents" style="background-color: slategrey;">Add New</a>
            <a href="listEvents" style="background-color: slategrey;">Edit Existing</a>    
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

      <table>
        <tr>
          <th>ID</th>
          <th>Event</th>
          <th>Date</th>
          <th>Time</th>
          <th>Location</th>
          <th>Special</th>
        </tr>

<?php foreach ( $results['tickets_id'] as $events ) { ?>

        <tr onclick="location='listEvents.php?action=editEventPage&amp;ticket_id=<?php echo $event->ticket_id?>'">
          <td>
              <?php echo $events->ticket_id?>
            </td>
          <td>
            <?php echo $events->event?>
          </td>

          <td>
            <?php echo date('j M Y', $events->date)?>
          </td>

          <td>
            <?php echo $events->time?>
          </td>

          <td>
            <?php echo $events->location?>
          </td>

          <td>
            <?php echo $events->special?>
          </td>
        </tr>

<?php } ?>

      </table>      

<?php include "footer.php" ?>