<?php include "header.php" ?>
<?php include "DB.php" ?>
<?php session_start(); ?>

      <div id="adminHeader">
        <h2>Adding New Page</h2>        
      </div>

      <h1>Enter Info About Event</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

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

      <p><a href="admin.php?action=newArticle">Add a New Event</a></p>

<?php include "footer.php" ?>