<?php
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "EVENTPAGES_NUM_EVENTS", 20 ); //change amount for evenets shown in each page
define( "ADMIN_USERNAME", "616702@student.inholland.nl" );
define( "ADMIN_PASSWORD", "ZaLR82i0" );
require(CLASS_PATH . "/eventpage.php");

function exceptionHandeling( $exception ) {
    echo "Unfortunately an error occured when performing that action, please try again!";
    error_log( $exception->getMessage() );
  }
  
  set_exception_handler( 'exceptionHandeling' );
  ?>