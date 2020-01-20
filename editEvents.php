<?php include "header.php" ?>
<?php include "DB.php" ?>
<?php session_start(); ?>

<div id="adminHeader">
        <h2>Adding New Page</h2>        
      </div>

      <h1>Enter Info About Event</h1>

      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="ticket_id" value="<?php echo $results['event']->ticket_id ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

          <li>
            <label for="event">Event Type</label>
            <input type="text" name="event" id="event" placeholder="Type of Event" value="<?php echo htmlspecialchars( $results['events']->event )?>" />
          </li>

          <li>
            <label for="date">Date</label>
            <input type="date" name="date" id="date" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['events']->date ? date( "Y-m-d", $results['events']->date ) : "" ?>" />
          </li>


          <li>
            <label for="Time">Time</label>
            <input type="time" name= "time" id="time" placeholder="Time i.e. 18:00:00" required maxlength="8" value="<?php echo $results['events']->time )?>"/>
          </li>

          <li>
            <label for="location">Location</label>
            <textarea name="location" id="location" placeholder="Address or Restaurant Name" required maxlength="100"><?php echo htmlspecialchars( $results['events']->location )?></textarea>
          </li>

          <li>
            <label for="special">Special</label>
            <textarea name="special" id="special" placeholder="Artist/Type of Food/Language/Deal" required maxlength="100"><?php echo htmlspecialchars( $results['events']->special )?></textarea>
          </li>



          


        </ul>

        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>

      </form>

<?php if ( $results['events']->id ) { ?>
      <p><a href="admin.php?action=deleteEvent&amp;articleId=<?php echo $results['events']->id ?>" onclick="return confirm('Delete This Event?')">Delete This Event</a></p>
<?php } ?>

<?php include "footer.php" ?>