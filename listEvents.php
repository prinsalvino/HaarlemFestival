<?php include "header.php" ?>

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

<?php foreach ( $results['event'] as $events ) { ?>

        <tr onclick="location='admin.php?action=editEventPage&amp;ticket_id=<?php echo $event->ticket_id?>'">
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

      <p><?php echo $results['totalRows']?> Events<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="admin.php?procedure=newArticle">Add a New Article</a></p>

<?php include "footer.php" ?>