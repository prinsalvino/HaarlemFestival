
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
  <?php include "header.php" ?>
    <section class="page_section">
        <section id="Title">
    
        <div style="width: 1388px;">              
                Adding Event
            </div>            
        </section>
        

        <h1>Adding Event</h1> 
  
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
    





      <form action="admin.php?action=addEvent" method="post">
        <input type="hidden" name="ticket_id" value="<?php echo $results['event']->ticket_id ?>"/>

        <ul class="editor">
          
        <li class="formedit">
            <label for="event">Event Type</label>
            <input type="text" name="event" id="event" placeholder="Type of Event" required maxlength= "20"<?php echo htmlspecialchars( $results['events']->event )?> />
          </li>

          <li class="formedit">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['events']->date ? date( "Y-m-d", $results['events']->date ) : "" ?>" />
          </li>

          <li class="formedit">
            <label for="Time">Start Time</label>
            <input type="time" name= "start-time" id="time" placeholder="Time i.e. 18:00" required maxlength="8" value=""/>
          </li>

          <li class="formedit">
            <label for="Time">End Time</label>
            <input type="time" name= "end-time" id="time" placeholder="Time i.e. 19:00" required maxlength="8" value=""/>
          </li>

          <li class="formedit">
            <label for="location">Location</label>
            <input name="location" id="location" placeholder="Address or Restaurant Name" required maxlength="100"><?php echo htmlspecialchars( $results['events']->location )?>
          </li>

          <li class="formedit">
            <label for="special">Special</label>
            <input name="special" id="special" placeholder="Artist/Type of Food/Language/Deal" required maxlength="100"><?php echo htmlspecialchars( $results['events']->special )?>
          </li>          



          


        </ul>

        
        <input type="submit" name="addEvent" value="Add Event" 
        style="position: relative;
        left: 317px;
        width: 160px;
		top: 100px;">
		
          <input type="submit" formnovalidate name="cancel" value="Cancel"
          style="position: relative;
            left: 317px;
            width: 160px;
			top: 100px;" />
        

      </form>
      </body>
      </html>
<?php if ( $results['events']->id ) { ?>
      <p><a href="admin.php?action=deleteEvent&amp;articleId=<?php echo $results['events']->id ?>" onclick="return confirm('Delete This Event?')">Delete This Event</a></p>
<?php } ?>

<?php include "footer.php" ?>