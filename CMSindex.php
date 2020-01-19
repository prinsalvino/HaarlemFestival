<?php
require("config.php");
$procedure = isset($_GET['procedure']) ? $_GET['procedure']: ""; // if the value exist its set otherwise it becomes a empty string

switch( $procedure )  {

   
    case 'addNew':
        addNew();
        break;
      case 'editExisting':
        editExisting();
        break;
      default:
        dashboard();
}

function editExisting() {
    if ( !isset($_GET["ticket_id"]) || !$_GET["ticket_id"] ) {
        dashboard(); //change this to show an error 
      return;
    }

    $results = array();
    $results['ticket_id'] = EventPage::getId( (int)$_GET["ticket_id"] );
    $results['pageTitle'] = $results['ticket_id']->title . "Editing Event";
   
    require( TEMPLATE_PATH . "/editExisting.php" );

}

function dashboard() {
        require( TEMPLATE_PATH . "dashboard.php" );
        //figure out how to makes views/sales and orders appear here along with messages.
  }
   


?>